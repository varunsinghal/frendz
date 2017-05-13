<?php 

require APP . 'core/service.php';

class UserService extends Service{


	public function authenticate($strUsername, $strPassword){
		if($strUsername == null || $strPassword == null){
			return null;
		}
		else{
			$user_detail = $this->model->authenticate($strUsername, $strPassword);
			if($user_detail->user_id == null){
				return null;
			}
			else{
				return array("user_id" => $user_detail->user_id, "user_name" => $user_detail->user_first_name);
			}
		}
	}

	public function register($strFirstName, $strLastName, $strEmail, $strPassword){
		if($this->model->findByEmail($strEmail)){
			return array("status_flag" => -1, "message" => "Email already exists.");
		}
		else{
			$this->model->insertUser($strFirstName, $strLastName, $strEmail, $strPassword);
			return array("status_flag" => 1, "message" => "Successfully registered.");
		}
	}
	
}