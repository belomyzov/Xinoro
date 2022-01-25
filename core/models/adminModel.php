<?php 

	/*
		Admin controller
		by xoheveras(Egor Udovin)
		https://github.com/xoheveras/xinoro
	
	*/

	class adminModel extends Model 
	{
		function createPage($url, $controller, $action, $title)
		{
			if(empty($url) or empty($controller) or empty($action) or empty($title))
				return;

			$TemplateController = file_get_contents('https://raw.githubusercontent.com/xoheveras/Xinoro/main/default_config/default_php/TemplateController.php');
			$TemplateModel = file_get_contents('https://raw.githubusercontent.com/xoheveras/Xinoro/main/default_config/default_php/TemplateModel.php');
			$TemplateView = file_get_contents('https://raw.githubusercontent.com/xoheveras/Xinoro/main/default_config/default_php/TemplateView.php');

			$TemplateAction = '
				function '.$action.'Action()
				{
					$this->view->LoadDesign();
				}

				#input_region#
			';

			$TemplateController = str_replace('$change$', $controller, $TemplateController);
			$TemplateController = str_replace('#input_region#',$TemplateAction, $TemplateController);
			$TemplateModel = str_replace('$change$', $controller, $TemplateModel);
			$TemplateView = str_replace('$change$', $action, $TemplateView);

			if(!is_dir("core/views/".$controller)) 
    			mkdir("core/views/".$controller);

    		if(!file_exists("core/controllers/".$controller."Controller.php"))
    		{
    			file_put_contents("core/controllers/".$controller."Controller.php", $TemplateController);
    		}
    		else
    		{
    			$TemplateController = file_get_contents("core/controllers/".$controller."Controller.php");
    			$TemplateController = str_replace('#input_region#',$TemplateAction, $TemplateController);
    			file_put_contents("core/controllers/".$controller."Controller.php", $TemplateController);
    		}

    		if(!file_exists("core/models/".$controller."Model.php"))
    			file_put_contents("core/models/".$controller."Model.php", $TemplateModel);

    		if(!file_exists("core/views/".$controller."/".$action.".php"))
    			file_put_contents("core/views/".$controller."/".$action.".php", $TemplateView);

    		$routes = json_decode(file_get_contents("config/routes.json"),true);
    		array_push($routes["routes"],array($url,$controller,$action,$title));
    		file_put_contents("config/routes.json", json_encode($routes));

    		header("location: panel");
		}

		function saveEditPage($controller, $action, $content)
		{
			file_put_contents("core/views/".$controller."/".$action.".php", $content);
		}
	}

?> 