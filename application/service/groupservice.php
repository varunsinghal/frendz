<?php 

require APP . 'model/groupmodel.php';

class GroupService{

	function __construct($db) {
		$this->groupModel = new GroupModel($db);
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

	public function fetchGroupDetails($group_id){
		return $this->groupModel->findGroupDetail($group_id);
	}

	public function fetchPosts($group_id){
		return $this->groupModel->fetchPosts($group_id);
	}



}