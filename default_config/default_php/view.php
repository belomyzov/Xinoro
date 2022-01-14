<?php 

	class View
	{
		public $controller;
		public $design = "Layouts/default";

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->design = $action;
		}

		public function LoadDesign($args = [])
		{
			extract($args);
			require_once("core/views/".$this->controller."/".$this->design.".php");
		}

		public static function Exception($code)
		{
			require_once("core/views/Error/".$code.".php");
			exit;
		}
	}	
?> 