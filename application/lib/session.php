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

		static function authorization()
		{
			$_SESSION["themMode"] = false;
		}

		static function logout()
		{
			$_SESSION = array();
        	session_destroy();
		}
	}

?>