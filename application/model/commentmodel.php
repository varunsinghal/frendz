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
		$sql = "select post_id, post_title, user_id from post_detail where group_id=:group_id";
		$query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

}