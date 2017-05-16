<?php

require APP . 'service/userservice.php';

class User extends Controller {

	public $userService;

	function __construct() {

		parent::__construct();
		$this->userService = new UserService();
		if(isset($_SESSION['user_id'])){
			header('location:' . URL . 'home/');
		}
	}

	public function index(){

		header('location:' . URL . 'user/login');

	}

	public function login($request=null){

		if(isset($_POST['login_user'])){
			$result = $this->userService->authenticate($this->protect($_POST['email']), $this->protect($_POST['pass']));
			
			if($result != null){
				$_SESSION['user_id'] = $result["user_id"];
				$_SESSION['user_name'] = $result["user_name"];
				header('location:' . URL . 'home/');
			}
		}

		// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/user/login.php';
		require APP . 'view/_templates/footer.php';


	}

	public function register(){

		if(isset($_POST['register_user'])){	
			$result = $this->userService->register($this->protect($_POST['first_name']), $this->protect($_POST['last_name']), $this->protect($_POST['email']), $this->protect($_POST['pass']));
			echo $result["message"];
		}

		// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/user/register.php';
		require APP . 'view/_templates/footer.php';


	}


}