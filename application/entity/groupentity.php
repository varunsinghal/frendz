<?php 

class GroupEntity {
	
	public $id;
	public $name;
	public $description;
	public $members;
	public $posts;

	function __construct($id, $name, $des, $members, $posts){
		$this->id = $id;
		$this->name = $name;
		$this->description = $des;
		$this->members = $members;
		$this->posts = $posts;
	}	

}