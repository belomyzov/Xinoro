<?php

/* 

	README[RU] ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	Автоматический генератор файлов для cms xinoro, просто запустите его и
	следуйте инструкциям на экране.Таким образом, вы можете легко установить
	эту cms в свой проект.

	Вы можете представить идеи по улучшению cms в профиле проекта на github.

	README[EN] ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


	Auto file generator for cms xinoro, just run it and
	follow the instructions on the screen.Thus, you can easily install
	this cms in your project.

 	You can submit ideas for improving the cms in the project's github profile.



*/


# We pull out the necessary data from the installation wizard
$json = file_get_contents("start.config.json");
$object = json_decode($json,true);

# Installing the received files
install($object,__DIR__."/");
install($object,"config/","config");
install($object,"core/","core");

# Installer, accepts installation paths and data keys
function install($object, $path, $key = "default")
{
	foreach($object[$key] as $value)
	{
		if(strpos($value,".") === false)
		{
			if(is_dir($path.$value)) 
				continue;

			mkdir($path.$value,0777);
		}
		else 
		{
			if(file_exists($path.$value))
				continue;

			file_put_contents($path.$value, file_get_contents("https://raw.githubusercontent.com/xoheveras/Xinoro/main/default_config/".$value));
		}
	}
}

// function dlog($mixed = null) 
// {
//   echo '<pre>';
//   var_dump($mixed);
//   echo '</pre>';
// }


?>

