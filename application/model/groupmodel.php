<?php 


class GroupModel{

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function findGroupByMemberId($user_id){
        $sql = "
        SELECT gd.group_id, gd.group_name, gd.group_description, pd.post_title, cd.comment_title
        from group_detail AS gd 
        left join group_member AS gm 
        on gd.group_id = gm.group_id 
        left join (
        SELECT A.post_id, A.post_title, A.created_on, A.group_id from post_detail A 
        inner join 
        (SELECT group_id, MAX(created_on) AS latest_created_on FROM post_detail GROUP BY group_id) B 
        on A.created_on = B.latest_created_on 
        ) AS pd 
        on pd.group_id = gd.group_id 
        left join (
        SELECT A.post_id, A.comment_title, A.created_on from comment_detail A 
        inner join 
        (SELECT post_id, MAX(created_on) AS latest_created_on FROM comment_detail GROUP BY post_id) B 
        on A.created_on = B.latest_created_on
        ) AS cd 
        on pd.post_id = cd.post_id
        where gm.user_id=:user_id
        order by gd.created_on desc
        ";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function findGroupByName($group_name){
        $sql = "SELECT group_name, count(group_id) AS count_groups from group_detail where group_name=:group_name group by group_name";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_name' => $group_name);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function accessByUserId($user_id, $group_id){
        $sql = "SELECT count(group_id) from group_member where user_id=:user_id and group_id=:group_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id, ':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetch();
    }


    public function createGroup($group_name, $group_des, $created_by){
        $sql = "INSERT INTO group_detail (group_name, group_description, group_created_by) VALUES (:group_name, :group_des, :created_by)";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_name' => $group_name, ':group_des' => $group_des, ':created_by' => $created_by);
        $query->execute($parameters);
        $group_id = $this->db->lastInsertId();
        $sql = "INSERT INTO group_member (group_id, user_id, is_admin) VALUES (:group_id, :user_id, 1)";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id, ':user_id' => $created_by);
        $query->execute($parameters);
    }

    public function findGroupDetail($group_id){
        $sql = "SELECT gd.*, frendz_user.user_first_name, frendz_user.user_last_name, frendz_user.user_id FROM group_detail AS gd left join frendz_user on gd.group_created_by = frendz_user.user_id WHERE group_id=:group_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function fetchPosts($group_id){
        $sql = "SELECT pd.post_id, post_title, pd.created_on, cd.comment_count, frendz_user.user_first_name, frendz_user.user_last_name, frendz_user.user_id
                from post_detail AS pd left join frendz_user 
                    on pd.user_id = frendz_user.user_id 
                left join (select post_id, count(comment_id) AS comment_count, max(created_on) AS max_created_on from comment_detail group by post_id) cd
                    on pd.post_id = cd.post_id
            where group_id=:group_id order by max_created_on desc, pd.created_on desc";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetchAll();
    }


}