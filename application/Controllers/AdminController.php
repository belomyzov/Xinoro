<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminController extends Controller 
	{
		public function AdminLoginAction()
		{
			$this->view->LoadDesign();
		}

		public function PanelAction()
		{
			$this->view->LoadDesign();
		}
	}

?>