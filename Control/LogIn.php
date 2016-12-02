<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));


$id = $_POST['Username'];
$p = $_POST['Password'];
$URI='http://resthomeoptimizer.cloudapp.net/Service1.svc/AccessAccount/?email='.$id.'&password='.$p;

$json=file_get_contents($URI);
if ($json=="true"){

    $template = $twig ->loadTemplate("MainPage.html.twig");
    $twigContent = array('data' => $data);
    echo $template->render($twigContent);
}
else {

    echo 'fail';
}


/**
 * Created by PhpStorm.
 * User: tomul
 * Date: 23-Nov-16
 * Time: 12:28
 */