<?php

class Connection extends Controller {
	
	function __construct() {
		parent::__construct();
		if(!isset($_SESSION['user_id'])){
			header('location:' . URL . 'site/');
		}
	}

	public function index(){
    	//fetch all active connections as list

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