<?php 

require APP . 'core/service.php';
require APP . 'model/groupmodel.php';

class GroupService extends Service{

	function __construct() {
        parent::__construct();
        $this->groupModel = new GroupModel($this->db);
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

	public function findGroupById($intGroupId){
		$this->groupModel->findGroupById($intGroupId);
	}

}