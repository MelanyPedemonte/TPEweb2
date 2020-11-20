<?php

class authHelper {

	static private function start() {
		if (session_status() != PHP_SESSION_ACTIVE)
			session_start();
	}

	static public function checkLogged() {
		self::start(); 

		if (!isset($_SESSION['IS_LOGGED'])) {
			header('Location: ' . BASE_URL . 'login');
			die();
		}
	}

	static public function isLogged() {
		self::start(); 
		return (isset($_SESSION['IS_LOGGED']));
	}

	static public function getUserLogged() {
		self::start();
		if (isset($_SESSION['USERNAME'])) {
			return $_SESSION['USERNAME'];
		}
		
		return false;
	}

	static public function login($user) {
		self::start();
		$_SESSION['IS_LOGGED'] = true;
		$_SESSION['ID_USER'] = $user->id_usuario;
		$_SESSION['USERNAME'] = $user->username;
	}

	static public function logout() {
		self::start();
		session_destroy();
	}

	static function esAdmin(){
        self::start();
        if($_SESSION['ADMIN'] == 1) {
            return true;
        } else {
            return false;
        }
    }


}

