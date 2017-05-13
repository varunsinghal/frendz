<?php 

class PostEntity {
	public $id;
	public $title;
	public $comments;
	public $creator;

	function __construct($id, $title, $comments, $creator){
		$this->id = $id;
		$this->title = $title;
		$this->comments = $comments;
		$this->creator = $creator;

	}
}