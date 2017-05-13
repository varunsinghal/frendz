<?php 

require APP . 'core/service.php';
require APP . 'entity/groupentity.php';

class GroupService extends Service{

	public function findGroupByMemberId($intUserId){
		return $this->model->findGroupByMemberId($intUserId);
	}

	public function createGroup($strGroupName, $strGroupDescription, $intUserId){
		if($strGroupName == null || $strGroupDescription == null || $intUserId == null){
			return array("status_flag" => -1, "message" => "Please fill the complete form.");
		}
		else if($this->model->findGroupByName($strGroupName)){
			return array("status_flag" => -1, "message" => "Group with this name already exists.");
		}
		else{
			$this->model->createGroup($strGroupName, $strGroupDescription, $intUserId);
			return array("status_flag" => 1, "message" => "Group created successfully.");
		}
	}

	public function findGroupById($intGroupId){
		$this->model->findGroupById($intGroupId);
	}

}