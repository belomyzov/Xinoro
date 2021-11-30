<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/CMS
	
	*/

	class AdminController extends Controller 
	{
		protected $requst;

		public function AdminLoginAction()
		{
			if(session::isAuth("isAdminAuth"))
				header("Location: panel");

			$this->requst = ["message" => ""];

			if(isset($_POST["aloginbtn"]))
			{
				if($_POST['login'] != "root" && $_POST['password'] != "root")
					$this->requst = ["message" => "<div class='warning'><p> Access denied </p></div>"];
				else
				{
					$_SESSION["isAdminAuth"] = true;
					return header("Location: panel");
				}
			}
			$this->view->LoadDesign($this->requst);
		}

		public function PagesAction()
		{
			if(isset($_POST["createPageBtn"]))
			{
				$receivedFolder = strip_tags($_POST['folder']);
				$receivedController = strip_tags($_POST['controller']);
				$receivedAction  = strip_tags($_POST['action']);

				$this->model->CreatePage($receivedFolder,$receivedController,$receivedAction);
			}
			$this->view->LoadDesign();
		}

		public function PanelAction()
		{
			$this->view->LoadDesign();
		}
	}

?>