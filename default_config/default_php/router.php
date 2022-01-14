<?php 

	/**
	 *  Отвечает за перенаправления на сайте
	 */
	class Router
	{
		protected $routes;
		function __construct()
		{
			# import routes
			$this->routes = json_decode(file_get_contents("config/routes.json"),true);
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			echo $this->checkPage();
		}

		# Получение текущего пути
		function getPath() 
		{
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$regex = "@\x2F\w*\x2F@";
			$match = [];

			if(preg_match($regex, $path, $match))
				$path = str_replace($match[0],'',$path);

			return $path;
		}

		# Проверка на валидность страницы
		function checkPage()
		{
			foreach ($this->routes as $value) {
				foreach($value as $url)
				{ 
					if($url[0] == $this->getPath())
					{
						$this->runPage($url[1],$url[2]);
						break;
					}
					else echo "404 page";
				}
			}
		}

		# *
		# $controller - запускаемый контроллер
		# $action - метод в контроллере
		# *
		function runPage($controller, $action)
		{
			$page_controller = $controller."Controller";
			$page_action = $action."Action";

			require_once("core/controllers/".$page_controller.".php");
			$pageController = new $page_controller($controller, $action);
			$pageController->$page_action();
		}
	}

?>