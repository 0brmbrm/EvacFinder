<?php
session_start();

require_once "models/connection.php";
require_once "models/userrights.model.php";
require_once "controllers/userrights.controller.php";
require_once "controllers/template.controller.php";

ControllerUserRights::ctrUserLogin();

// // TEMPORARY DEBUG
// var_dump($_POST);
// var_dump($_SESSION);

// // Add this to check database response
// $test = (new ModelUserRights)->mdlGetUserCredentials('userrights', 'username', 'user');
// var_dump($test);
// die();

$template = new ControllerTemplate();
$template->ctrTemplate();