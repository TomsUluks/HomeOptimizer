<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig ->loadTemplate("MainPage.html.twig");

$id = $_POST['Username'];
$id = $_POST['Password'];
$URI = 'http://homeoptimizer.cloudapp.net/Service1.svc?wsdl';
$json = file_get_contents($URI);

$data = json_decode($json);

$twigContent = array('data' => $data);
echo $template->render($twigContent);
/**
 * Created by PhpStorm.
 * User: tomul
 * Date: 23-Nov-16
 * Time: 12:28
 */