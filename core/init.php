<?php 
session_start();

$GLOBALS['config']  = array(
	"mysql" =>  array(
		"host" =>"localhost",
		"username"=>"root",
		"password" => "",
		"db"=> "credentials"  
	),
	"remember" => array(
		"cookie_name" => "hash",
		"cookie_expiry" => 3600
	),
	"session"=> array(
		"session_name" =>"user",
		"token_name" => "token" 
	)
);
require_once 'classes/Config.php';
require_once 'classes/DB.php';
require_once 'classes/Input.php'; 
require_once 'classes/Token.php';
require_once 'classes/Session.php';  
require_once 'classes/validate.php';  
require_once 'funtions/sanitize.php';

 ?>