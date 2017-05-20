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
		SELECT message_detail.message_id, message_detail.message_content, message_calc.other_user, user.user_first_name, user.user_last_name, message_detail.from_user_id, user.user_email FROM message_detail INNER JOIN (
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
			INNER JOIN user ON user.user_id = message_calc.other_user";
		$query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}
}