<?php 


class ConnectionModel{

	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	public function fetchActiveConnections($user_id){
		$sql = "
		SELECT user.user_first_name, user.user_last_name, user.user_email, cd.updated_on, cd.other_user 
		FROM (SELECT 
		CASE
		WHEN from_user_id =:user_id THEN to_user_id
		WHEN to_user_id =:user_id THEN from_user_id
		END AS other_user,
		updated_on
		FROM connection_detail
		WHERE (accept = 1) and (from_user_id =:user_id or to_user_id =:user_id)) cd LEFT JOIN user on cd.other_user = user.user_id order by updated_on desc
		";
		$query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

	public function isConnectedOrPending($user1, $user2){
		$sql = "SELECT accept from connection_detail where ((from_user_id=:user1 and to_user_id=:user2) or (from_user_id=:user2 and to_user_id=:user1)) and (accept=0 or accept=1)";
		$query = $this->db->prepare($sql);
        $parameters = array(':user1' => $user1, ':user2' => $user2);
        $query->execute($parameters);
        return $query->fetch();
	}

	public function addConnection($from_user_id, $to_user_id, $self_note){
		$sql = "INSERT INTO connection_detail (from_user_id, to_user_id, accept, created_on, note) values (:from_user_id, :to_user_id, 0, :current_time, :note)";
		$query = $this->db->prepare($sql);
        $parameters = array(':from_user_id' => $from_user_id, ':to_user_id' => $to_user_id, ':current_time' => time(), ':note' => $self_note);
        $query->execute($parameters);
	}

	public function fetchPendingConnections($user_id){
		$sql = "SELECT user.user_id, user.user_first_name, user.user_last_name, user.user_email, cd.created_on, cd.note from (SELECT from_user_id, created_on, note from connection_detail where accept = 0 and to_user_id=:user_id) cd left join user on cd.from_user_id = user.user_id order by created_on desc";
		$query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

	public function actOnConnection($user_id, $other_user_id, $accept){
		$sql = "UPDATE connection_detail set accept =:accept, updated_on =:current_time where from_user_id=:other_user_id and to_user_id=:user_id and accept = 0";
		$query = $this->db->prepare($sql);
        $parameters = array(':accept' => $accept, ':other_user_id' => $other_user_id, ':user_id' => $user_id, ':current_time' => time());
        $query->execute($parameters);
	}

	public function fetchRequestedConnections($user_id){
		$sql = "SELECT user.user_id, user.user_first_name, user.user_last_name, user.user_email, cd.created_on, cd.note from (SELECT to_user_id, created_on, note from connection_detail where accept = 0 and from_user_id=:user_id) cd left join user on cd.to_user_id = user.user_id order by created_on desc";
		$query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
	}

}