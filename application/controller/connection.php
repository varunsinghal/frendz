<?php

require APP . 'service/connectionservice.php';
require APP . 'service/userservice.php';

class Connection extends Controller {
	
	function __construct() {
		parent::__construct();
		if(!isset($_SESSION['user_id'])){
			header('location:' . URL . 'user/login');
		}
		$this->connectionService = new connectionservice($this->db);
		$this->userService = new UserService($this->db);
		$this->smarty->assign('module_name', 'connections');
	}

	public function index(){
		$threads = $this->connectionService->fetchActiveConnections($_SESSION['user_id']);
		$this->smarty->assign('threads', $threads);
    	$this->smarty->display('connection/index.tpl');

	}

	public function add(){
		if(isset($_POST['send_request'])){
			$result = $this->connectionService->addConnection($_SESSION['user_id'], $_POST['to_user_id'], $_POST['message_content']);
			$this->smarty->assign('message', $result['message']);
		}
		$this->smarty->assign('available_users', $this->userService->availableUsers($_SESSION['user_id']));
		$this->smarty->display('connection/add.tpl');
	}

	public function pending(){
		$threads = $this->connectionService->fetchPendingConnections($_SESSION['user_id']);
		$this->smarty->assign('threads', $threads);
    	$this->smarty->display('connection/pending.tpl');
	}

	public function requested(){
		$threads = $this->connectionService->fetchRequestedConnections($_SESSION['user_id']);
		$this->smarty->assign('threads', $threads);
		$this->smarty->display('connection/requested.tpl');
	}

	public function id(){
    	//public profile of a connection
	}


	/*
	AJAX - OPTIONS
	*/
	public function accept($other_user_id=null){
		if($other_user_id)
			$this->connectionService->acceptRequest($_SESSION['user_id'], $other_user_id);
		header('location:' . URL . 'connection/pending');
	}

	public function decline($other_user_id=null){
		if($other_user_id)
			$this->connectionService->declineRequest($_SESSION['user_id'], $other_user_id);
		header('location:' . URL . 'connection/pending');
	}

	
}