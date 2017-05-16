<?php


class Site extends Controller {
	

	function __construct() {
        parent::__construct();
    }

    public function index() {

    	
    	// load views
		require APP . 'view/_templates/header.php';
		require APP . 'view/site/index.php';
		require APP . 'view/_templates/footer.php';
    }

    public function about() {

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/site/about.php';
        require APP . 'view/_templates/footer.php';
    }
    }