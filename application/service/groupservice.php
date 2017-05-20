<?php 

require APP . 'model/groupmodel.php';
require APP . 'model/postmodel.php';
require APP . 'model/commentmodel.php';

class GroupService{

	function __construct($db) {
        $this->groupModel = new GroupModel($db);
        $this->postModel = new PostModel($db);
        $this->commentModel = new CommentModel($db);
    }

	public function findGroupByMemberId($intUserId){
		return $this->groupModel->findGroupByMemberId($intUserId);
	}

	public function createGroup($strGroupName, $strGroupDescription, $intUserId){
		if($strGroupName == null || $strGroupDescription == null || $intUserId == null){
			return array("status_flag" => -1, "message" => "Please fill the complete form.");
		}
		else if($this->groupModel->findGroupByName($strGroupName)){
			return array("status_flag" => -1, "message" => "Group with this name already exists.");
		}
		else{
			$this->groupModel->createGroup($strGroupName, $strGroupDescription, $intUserId);
			return array("status_flag" => 1, "message" => "Group created successfully.");
		}
	}

	public function validateAccess($user_id, $group_id){
		if($result = $this->groupModel->accessByUserId($user_id, $group_id)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function fetchByGroupId($int_group_id){
		//build logic to return a single object
		$this->groupModel->findGroupDetail($int_group_id);
		$this->postModel->findAllPostByGroupId($int_group_id);
		$this->commentModel->findAllCommentByGroupId($int_group_id);
	}



}