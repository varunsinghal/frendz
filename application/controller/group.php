<?php

require APP . 'service/groupservice.php';

class Group extends Controller {
	
	public $groupService;

	function __construct() {
        parent::__construct();
        $this->groupService = new GroupService($this->db);

        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'user/login');
        }
    }

    public function index() {
    	$groups = $this->groupService->findGroupByMemberId($_SESSION['user_id']);
        $this->smarty->assign('groups', $groups);
		$this->smarty->display('group/index.tpl');
    }

    public function create(){
    	if(isset($_POST['create_group'])){
    		$result = $this->groupService->createGroup($this->protect($_POST['group_name']), $this->protect($_POST['group_des']), $_SESSION['user_id']);
    		$this->smarty->assign('message', $result["message"]);
    	}
		$this->smarty->display('group/create.tpl');
    }

    public function id($group_id){
        if($this->groupService->validateAccess($_SESSION['user_id'], $this->protect($group_id))){
            $posts = $this->groupService->fetchByGroupId($group_id);
        }
        else{
           header('location:' . URL . 'group/');
        }
        $this->smarty->display('group/id.tpl');
    }

    /* AJAX-ACTION */

    public function addPost(){

    }

    public function addComment(){

    }

    public function addUser(){

    }
}