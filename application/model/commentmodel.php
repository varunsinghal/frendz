<?php 


class CommentModel{

	function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

	public function findAllCommentByGroupId($group_id){
		$sql = "SELECT comment_id, comment_title, cd.post_id, cd.user_id FROM comment_detail AS cd inner join post_detail AS pd on cd.post_id = pd.post_id where pd.group_id=:group_id";
		$query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

}