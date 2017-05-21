<?php

require APP . 'service/messageservice.php';
require APP . 'service/userservice.php';

class Message extends Controller {

	function __construct() {
        parent::__construct();
        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'user/login');
        }
        $this->messageService = new MessageService($this->db);
        $this->userService = new UserService($this->db);
        $this->smarty->assign('module_name', 'messages');
        
    }

    public function index() {
        $threads = $this->messageService->fetchActiveThreads($_SESSION['user_id']);
        $this->smarty->assign('threads', $threads);
		$this->smarty->display('message/index.tpl');
    }

    public function create(){
        if(isset($_POST['send_message'])){
            $this->messageService->addMessage($_SESSION['user_id'], $_POST['to_user_id'], $_POST['message_content']);
            header('location:' . URL . 'message/id/' . $_POST['to_user_id']);

        }
        $this->smarty->assign('available_users', $this->userService->availableUsers($_SESSION['user_id']));
        $this->smarty->display('message/create.tpl');
    }

    public function id($other_user_id=null){
        if($other_user_id){
            if(isset($_POST["send_message"])){
                $this->messageService->addMessage($_SESSION['user_id'], $other_user_id, $_POST['message_content']);
            }
            $threads = $this->messageService->fetchConversation($_SESSION['user_id'], $other_user_id);
            $this->smarty->assign('other_user_id', $other_user_id);
            $this->smarty->assign('threads', $threads);
            $this->smarty->display('message/id.tpl');
        }
        else{
            header('location:' . URL . 'message');
        }

        

    }


}