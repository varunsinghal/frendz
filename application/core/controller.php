<?php

require APP . 'smarty/libs/Smarty.class.php';

class Controller
{

    public $smarty = null;
    public $db = null;

    function __construct()
    {
        session_start();
        $this->openDatabaseConnection();
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir(APP . 'view/');
        $this->smarty->setCompileDir(APP . 'smarty/templates_c');
        $this->smarty->setCacheDir(APP . 'smarty/cache');
        $this->smarty->setConfigDir(APP . 'smarty/configs');

    }

    private function openDatabaseConnection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    public function protect($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return $input;
    }

}
