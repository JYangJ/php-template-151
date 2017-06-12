<?php

namespace jyangj\Controller;

use jyangj\SimpleTemplateEngine;
use jyangj\Service\LoginService;


class LoginController
{
	/**
	 * @var ihrname\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	/**
	 * @var \PDO Database connection
	 */
	private $loginService;


	/**
	 * @param ihrname\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, LoginService $loginService)
	{
		$this->template = $template;
		$this->loginService = $loginService;
	}

	public function showLogin()
	{
		echo $this->template->render("login.html.php");
	}

	public function login(array $data)
	{
		if(!array_key_exists("email", $data) OR !array_key_exists("password", $data)) {
			echo $this->template->render("login.html.php");
			return;

		}
	
		
		if($this->loginService->authenticate($data["email"], $data["password"])) {
			$_SESSION["email"] = $data["email"];
			header("Location: /");
		}
		
	}
	public function logout()
	{
		unset($_SESSION["email"]);
		header("Location: /login");
	}
}