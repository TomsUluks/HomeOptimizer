<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig ->loadTemplate("MainPage.html.twig");
/**
 * Created by PhpStorm.
 * User: tomul
 * Date: 23-Nov-16
 * Time: 12:28
 */