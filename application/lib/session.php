<?php 

	session_start();

	class session
	{
		static function isAuth($authParams)
		{
			if(isset($_SESSION[$authParams]))
			{
				return $_SESSION[$authParams];
			}
			else return false;
		}

		static function authorization($isAdminAuth = false)
		{
			$_SESSION["isAdminAuth"] = $isAdminAuth;
			$_SESSION["themMode"] = false;
		}

		static function getDate()
		{
			return [
				"isAdminAuth" => $_SESSION["isAdminAuth"],
				"themMode" => $_SESSION["themMode"],
			];
		}

		static function logout()
		{
			$_SESSION = array();
        	session_destroy();
		}
	}

?>