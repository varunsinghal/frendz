<?php

class Home extends Controller
{

    function __construct() {
        parent::__construct();
        if(!isset($_SESSION['user_id'])){
            header('location:' . URL . 'site/');
        }
    }
    
    public function index()
    {
        //user dp only view

        //generate summary
        //no. of friends
        //groups created
        //groups joined
        //posts created
        //comments done

        // load views
        $this->smarty->display('home/index.tpl');
    }


    public function logout() {
        session_destroy();
        header('location:' . URL . 'user');
    }
}
