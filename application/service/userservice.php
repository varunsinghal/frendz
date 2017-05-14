<?php 

require APP . 'core/service.php';
require APP . 'model/usermodel.php';

class UserService extends Service{


	function __construct() {
        parent::__construct();
        $this->userModel = new UserModel($this->db);
    }


	public function authenticate($strUsername, $strPassword){
		if($strUsername == null || $strPassword == null){
			return null;
		}
		else{
			$user_detail = $this->userModel->authenticate($strUsername, $strPassword);
			if($user_detail->user_id == null){
				return null;
			}
			else{
				return array("user_id" => $user_detail->user_id, "user_name" => $user_detail->user_first_name);
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
	
}