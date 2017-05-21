<?php 

require APP . 'model/connectionmodel.php';


class ConnectionService{

	function __construct($db) {
        $this->connectionModel = new ConnectionModel($db);
    }

    public function fetchActiveConnections($user_id){
    	if($user_id){
    		return $this->connectionModel->fetchActiveConnections($user_id);
    	}
    	return null;
    }

    private function isConnectedOrPending($user1, $user2){
    	$result = $this->connectionModel->isConnectedOrPending($user1, $user2);
    	if($result){
    		if($result->accept == 0)
    			return array("status_flag" => 0, "message" => 'Already requested.');
    		elseif ($result->accept == 1)
    			return array("status_flag" => 0, "message" => 'Already connected.');
    	}
    	return null;
    }

    public function addConnection($from_user_id, $to_user_id, $self_note){
    	$isConnected = $this->isConnectedOrPending($from_user_id, $to_user_id);
    	if($isConnected)
    		return $isConnected;
    	else{
    		$this->connectionModel->addConnection($from_user_id, $to_user_id, $self_note);
    		return array("status_flag" => 1, "message" => 'Request sent.');
    	}
    }

    public function fetchPendingConnections($user_id){
    	return $this->connectionModel->fetchPendingConnections($user_id);
    }

    public function acceptRequest($user_id, $other_user_id){
    	$this->connectionModel->actOnConnection($user_id, $other_user_id, 1);
    }

    public function declineRequest($user_id, $other_user_id){
    	$this->connectionModel->actOnConnection($user_id, $other_user_id, -1);
    }

    public function fetchRequestedConnections($user_id){
    	return $this->connectionModel->fetchRequestedConnections($user_id);
    }

}