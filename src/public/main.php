<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(realpath('./../views'));
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('index.twig');

echo $template->render(['a_variable' => 'hogehoge']);