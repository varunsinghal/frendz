<?php

require APP . 'service/groupservice.php';

class Group extends Controller {
	
	public $groupService;

	function __construct() {
        parent::__construct();
        $this->groupService = new GroupService();

        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'user/login');
        }
    }

    public function index() {

    	$groups = $this->groupService->findGroupByMemberId($_SESSION['user_id']);
    	// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/group/index.php';
		require APP . 'view/_templates/footer.php';
    }

    public function create(){

    	if(isset($_POST['create_group'])){
    		$result = $this->groupService->createGroup($this->protect($_POST['group_name']), $this->protect($_POST['group_des']), $_SESSION['user_id']);

    		echo $result["message"];

    	}
    	// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/group/create.php';
		require APP . 'view/_templates/footer.php';
    }

    public function id($group_id){

        //if($this->groupService->validateAccess($_SESSION['user_id'], $this->protect($group_id))){
            $posts = $this->groupService->findGroupById($group_id);
        //}
        //else{
        //    header('location:' . URL . 'group/');
        //}

    }
}