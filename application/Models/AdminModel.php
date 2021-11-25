<?php 

	/*
		Admin model
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminModel extends Model
	{
		public function Authorization($login, $password)
		{
			if($requst != null)
			{
				if($requst['password'] == $password)
				{
					if(session::isAuth() != true)
						session::authorization($login);

					return header("Location: ../account/home");
				}
				return "Wrong password";
			}
			return "Wrong login";
		}
	}	
?>