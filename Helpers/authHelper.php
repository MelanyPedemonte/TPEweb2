<?php

class authHelper {

	static private function start() {
		if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
	}

	static public function checkLogged() {
		self::start();
        if(!isset($_SESSION['USER_NAME'])){
            return false;
        }else {  
             return true;
         }
	}

	static public function login($usuario) {
		self::start();
		$_SESSION['ID_USER'] = $usuario->id_usuario;
		$_SESSION['USER_NAME'] = $usuario->usuario;
        $_SESSION['EMAIL_USER'] = $usuario->email;
        $_SESSION['ADMIN'] = $usuario->admin;
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

