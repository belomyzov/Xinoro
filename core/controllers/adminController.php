<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/xinoro

	*/

	class adminController extends Controller 
	{
		public function panelAction()
		{
			if(isset($_GET['createpage']))
			{
				$this->model->createPage($_GET['u'],$_GET['c'],$_GET['a'],$_GET['t']);
			}

			$this->view->LoadDesign();
		}

		public function contentAction()
		{
			$this->view->LoadDesign();
		}

		
		function editorAction()
		{
			if(isset($_POST['savepages']))
			{
				$this->model->saveEditPage($_GET["c"],$_GET["a"],$_POST['file']);
			}
			$this->view->LoadDesign();
		}

		
		function databaseAction()
		{
			$this->view->LoadDesign();
		}

		
		function settingAction()
		{
			$this->view->LoadDesign();
		}
		
		#input_region#	
	}

?> 