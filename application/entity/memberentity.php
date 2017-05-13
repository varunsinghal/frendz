<?php

class MemberEntity{
	public $id;
	public $name;

	function __construct($user_id, $user_name){
		$this->id = $user_id;
		$this->name = $user_name;
	}
}