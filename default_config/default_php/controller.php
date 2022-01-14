<?php 

	// 
	//    Класс которы отвечает за соединение view с model
	//

	class Controller
	{
		protected $controller;
		protected $action;
		protected $view;
		protected $model;

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->action = $action;
			$this->view = new View($controller, $action);
			$this->createModel();
		}

		public function createModel()
		{
			$controller = $this->controller."Model";
			require_once("core/models/".$controller.".php");
			$this->model = new $controller($this->controller,$this->action);
		}
	}

?> 