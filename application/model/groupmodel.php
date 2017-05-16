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
        $sql = "SELECT gd.group_id, gd.group_name, gd.group_description from group_detail AS gd left join group_member AS gm on gd.group_id = gm.group_id where user_id=:user_id";
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
        $sql = "SELECT * FROM group_detail WHERE group_id=:group_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetch();
    }


}