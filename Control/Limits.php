<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));

$Limit = $_POST['Limit'];
/**
 * Created by PhpStorm.
 * User: tomul
 * Date: 02-Dec-16
 * Time: 10:37
 */