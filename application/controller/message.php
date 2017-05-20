<?php

require APP . 'service/messageservice.php';

class Message extends Controller {

	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'user/login');
        }
        $this->messageService = new MessageService($this->db);
        
    }

    public function index() {
        $threads = $this->messageService->fetchActiveThreads($_SESSION['user_id']);
        $this->smarty->assign('threads', $threads);
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