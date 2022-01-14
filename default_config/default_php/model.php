<?php 

	// 
	//    Класс в котором происходят все основные вычисения сайта
	//

	class Model
	{
		protected $controller;
		protected $action;
		protected $datebase;

		public function __construct($controller, $action)
		{
			$this->controller = $controller;
			$this->action = $action;
			$this->datebase = new BaseDate();
		}
	}

?> 