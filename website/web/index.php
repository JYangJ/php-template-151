<?php

use jyangj\Service\LoginMysqlService;

error_reporting(E_ALL);
session_start();

require_once("../vendor/autoload.php");
$conf = parse_ini_file(__DIR__ . "/../config.ini", true);

$factory = new jyangj\Factory($conf);

if(!array_key_exists("email", $_SESSION) && $_SERVER["REQUEST_METHOD"] == "GET" && $_SERVER["REQUEST_URI"] !== "/login") {
	header("Location: /login");
	return;
}
switch($_SERVER["REQUEST_URI"]) {
	case "/":
		$factory->getIndexController()->homepage();
		$factory->getMailer()->send(
				Swift_Message::newInstance("Subject")
				->setFrom(["gibz.module.151@gmail.com" => "Your Name"])
				->setTo(["foobar@gmail.com" => "Foos Name"])
				->setBody("Here is the message itself")
				);

		break;
	case "/logout":
		$factory->getLoginController()->logout();
		break;
	case "/gallery":
		$factory->getIndexController()->gallery();
		break;
	case "/gallery2":
		$factory->getIndexController()->gallery2();
		break;
	case "/login":
		$ctr = $factory->getLoginController();
		if($_SERVER["REQUEST_METHOD"] == "GET") {
			$ctr->showLogin();
		} else {
			$ctr->login($_POST);
		}
		break;
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			$factory->getIndexController()->greet($matches[1]);
			break;
		}
		echo "Not Found";
}