<?php

error_reporting(E_ALL);

require_once("../vendor/autoload.php");
$tmpl = new jyangj\SimpleTemplateEngine(__DIR__ . "/../templates/");

switch($_SERVER["REQUEST_URI"]) {
	case "/":
		(new jyangj\Controller\IndexController($tmpl))->homepage();
		break;
	case "/login":
		(new jyangj\Controller\LoginController($tmpl))->showLogin();
		break;
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			(new jyangj\Controller\IndexController($tmpl))->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

