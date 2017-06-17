<?php

/**
 * FRENDZ - A web portal for social network presented in Technical Fest AEON, DTU (formerly Delhi College of Engineering)
 *
 * @package frendz
 * @author Varun Singhal
 * @link https://github.com/varunsinghal/frendz/
 * @license http://opensource.org/licenses/MIT MIT License
 */


define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);


if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

require APP . 'config/config.php';
require APP . 'libs/helper.php';
require APP . 'core/application.php';
require APP . 'core/controller.php';

// start the application
$app = new Application();
