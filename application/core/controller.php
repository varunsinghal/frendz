<?php

require APP . 'smarty/libs/Smarty.class.php';

class Controller
{

    public $smarty = null;

    function __construct()
    {
        session_start();
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(APP . 'view/');
        $this->smarty->setCompileDir(APP . 'smarty/templates_c');
        $this->smarty->setCacheDir(APP . 'smarty/cache');
        $this->smarty->setConfigDir(APP . 'smarty/configs');

    }

    public function protect($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return $input;
    }
}
