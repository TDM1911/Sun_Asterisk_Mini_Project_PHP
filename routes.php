<?php

//create controller file path;
$controller = str_replace('_','',ucwords($controller)).'Controller';
$controller_path = BASE_PATH."/Controllers/{$controller}.php";
//validate file path
if (!file_exists($controller_path)) {
    die("File not found <b>'$controller_path'</b>");
}
require_once($controller_path);
//validate controller class
if (!class_exists($controller)) {
    die("Class not found <b>'$controller'</b>");
}
$object = new $controller;
//validate action
if (!method_exists($object, $action)) {
    die("Method not found <b>'$action'</b>");
}
$reflection = new ReflectionMethod($object, $action);
if (!$reflection->isPublic()) {
    die("Method <b>'$action'</b> is not public");
}
//run action from controller
$object->$action();