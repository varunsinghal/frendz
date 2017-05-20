<?php

require APP . 'model/messagemodel.php';

class MessageService{
	
	function __construct($db) {
        $this->messageModel = new MessageModel($db);
    }

    public function fetchActiveThreads($user_id){
    	return $this->messageModel->fetchMessageThreadsFor($user_id);
    }
}