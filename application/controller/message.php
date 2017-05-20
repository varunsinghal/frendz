<?php


class Message extends Controller {

	function __construct() {
        parent::__construct();

        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'user/login');
        }
    }

    public function index() {

    	//fetch all active threads 

    	// load views
		$this->smarty->display('message/index.tpl');
    }

    public function create(){
        //create a new thread

    }

    public function id(){
        //fetch specific thread - to a person

    }


    /* AJAX - ACTION */

    public function addMessage(){

    }



}