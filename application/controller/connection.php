<?php

class Connection extends Controller {
	
	function __construct() {
		parent::__construct();
		if(!isset($_SESSION['user_id'])){
			header('location:' . URL . 'user/login');
		}
	}

	public function index(){
    	//fetch all active connections as list

    	$this->smarty->display('message/index.tpl');

	}

	public function id(){
    	//public profile of a connection
	}


	/*
	AJAX - OPTIONS
	*/
	public function accept(){

	}

	public function decline(){

	}

	public function request(){

	}
}