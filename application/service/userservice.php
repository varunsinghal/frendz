<?php 

require APP . 'model/usermodel.php';

class UserService{


	function __construct($db) {
		$this->userModel = new UserModel($db);
	}


	public function authenticate($strUsername, $strPassword){
		if($strUsername == null || $strPassword == null){
			return null;
		}
		else{
			$user_detail = $this->userModel->authenticate($strUsername, $strPassword);
			if($user_detail){
				return array("user_id" => $user_detail->user_id, "user_name" => $user_detail->user_first_name, "user_email" => $user_detail->user_email);
			}
		}
	}


	public function register($strFirstName, $strLastName, $strEmail, $strPassword){
		if($this->userModel->findByEmail($strEmail)){
			return array("status_flag" => -1, "message" => "Email already exists.");
		}
		else{
			$this->userModel->insertUser($strFirstName, $strLastName, $strEmail, $strPassword);
			return array("status_flag" => 1, "message" => "Successfully registered.");
		}
	}

	public function availableUsers($user_id){
		$result = '[';
		foreach ($this->userModel->findAllUsers($user_id) as $user) {
			$result .= '{ label : "' . $user->user_first_name . ' ' . $user->user_last_name . '",';
			$result .= 'value : "' . $user->user_id . '" }, ';
		}
		$result  .= ']';
		return $result;
	}
	
}