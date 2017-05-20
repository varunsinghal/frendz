<?php

class MessageModel{
	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	public function fetchMessageThreadsFor($user_id){
		$sql = "
		SELECT message_detail.message_id, message_detail.message_content, message_calc.other_user, user.user_first_name, user.user_last_name, message_detail.from_user_id, user.user_email, message_detail.created_on FROM message_detail INNER JOIN (
				SELECT
				MAX(message_id) AS message_id,
				CASE
				WHEN from_user_id =:user_id THEN to_user_id
				WHEN to_user_id =:user_id THEN from_user_id
				END AS other_user  
				FROM message_detail
				GROUP BY
				CASE
				WHEN from_user_id =:user_id THEN to_user_id
				WHEN to_user_id =:user_id THEN from_user_id
				END
				HAVING other_user IS NOT NULL) 
			message_calc on message_detail.message_id = message_calc.message_id
			INNER JOIN user ON user.user_id = message_calc.other_user order by message_detail.created_on desc";
		$query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

	public function addMessage($from, $to, $message, $time){
		$sql = "INSERT INTO message_detail (from_user_id, to_user_id, message_content, created_on) VALUES(:from_id, :to_id, :message, :time_stamp)";
		$query = $this->db->prepare($sql);
        $parameters = array(':from_id' => $from, ':to_id' => $to, ':message' => $message, ":time_stamp" => $time);
        $query->execute($parameters);
	}

	public function fetchConversation($from, $to){
		$sql = "SELECT A.*, user.user_first_name, user.user_last_name, user.user_email from (SELECT message_id, message_content, from_user_id, created_on from message_detail where (from_user_id=:from_id and to_user_id=:to_id) or (from_user_id=:to_id and to_user_id=:from_id)) A left join user on A.from_user_id = user.user_id order by A.created_on asc";
		$query = $this->db->prepare($sql);
        $parameters = array(':from_id' => $from, ':to_id' => $to);
        $query->execute($parameters);
        return $query->fetchAll();
	}
}