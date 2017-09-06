<?php


class Site extends Controller {
	

	function __construct() {
        parent::__construct();
        $this->smarty->assign('module_name', 'site');
    }

    public function index() {

    	
    	// load views
      $this->smarty->display('site/index.tpl');
  }

  public function about() {

        // load views
     $this->smarty->display('site/about.tpl');
 }
}