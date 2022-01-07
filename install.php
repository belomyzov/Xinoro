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
if(isset($_GET['installing']))
{
	install($object,__DIR__."/");
	install($object,"core/","core");
	install($object,"config/","config");
}

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
# check download files
function checkfiles($object, $path, $key = "default")
{
	foreach($object[$key] as $value)
	{
		if(strpos($value,".") === false)
		{
			if(!is_dir($path.$value)) return false;
		}
		else if(!file_exists($path.$value)) return false;
	}
	return true;
}

function dlog($mixed = null) 
{
  echo '<pre>';
  var_dump($mixed);
  echo '</pre>';
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xinoro - Установка</title>
</head>
<body>
		<div class="container">
			<div class="logo"><img src="logo.png"></div>
			<?php
				if(!isset($_GET['installing']))
					echo '<div class="adaptivny-slayder">
						  <input type="radio" name="kadoves" id="slaid1" checked>
						  <input type="radio" name="kadoves" id="slaid2">
						  <input type="radio" name="kadoves" id="slaid3">
						   
						  <div class="kadoves">
						  <label for="slaid1"></label>
						  <label for="slaid2"></label>
						  <label for="slaid3"></label>
						  </div>
						   
						  <div class="adaptivny-slayder-lasekun">
						  	<div class="abusteku-deagulus">
						  		<img src="image1.png"/>
						  		<img src="image1.png"/>
						  		<img src="image1.png"/>
						  	</div>
			  			</div>
								</div>
								<div class="description">Добро пожаловать в мастер установки Xinoro,<br>
								следуйте инструкциям и у вас всё получится</div>
								<div class="btn">Далее</div>';

				if(isset($_GET['installing']))
				{
					// Install system
					echo '<div class="statusbox">';
						if(checkfiles($object,__DIR__."/"))
							echo '<div class="statuscheck"></div>';
						else
							echo '<div class="statuscheck red"></div>';
						echo '<div class="checkedtext">Установка системы</div>
					</div>';

					// install config

					echo '<div class="statusbox">';
						if(checkfiles($object,"config/","config"))
							echo '<div class="statuscheck"></div>';
						else
							echo '<div class="statuscheck red"></div>';
						echo '<div class="checkedtext">Загрузка конфигураций</div>
					</div>';

					// install core

					echo '<div class="statusbox">';
						if(checkfiles($object,"core/","core"))
							echo '<div class="statuscheck"></div>';
						else
							echo '<div class="statuscheck red"></div>';
						echo '<div class="checkedtext">Загрузка модулей</div>
					</div><div class="btn">Далее</div>';

				}
			?>
		</div>
</body>
</html>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,400&display=swap');


	.statusbox
	{
		display: flex;
		margin-left: 27%;
	}

	.statuscheck
	{
		width: 15px;
		height: 15px;
		background: #60D06C;
		display: block;
    border-radius: 10px;
    margin-top: 20px;
	}

	.checkedtext
	{
		font-family: Montserrat;
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 17px;
		/* identical to box height */
		/*text-align: center;*/
		color: #595959;
		margin-top: 20px;
		margin-left: 20px;
	}

	.red
	{
		background-color: #D06060;
	}

	.btn
	{
		background: #595959;
		border-radius: 5px;
		width: 280px;
		height: 48px;
		display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 4%;

    font-family: Montserrat;
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		line-height: 46px;
		/* identical to box height */

		cursor: pointer;

		text-align: center;

		color: #FFFFFF;
	}

	.container
	{
		width: 550px;
		height: 600px;
		background: #FFFFFF;
		box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
		border-radius: 5px;

		display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10%;
	}

	.logo
	{
		margin-left: 35%;
		padding-top: 5%;
	}

	.adaptivny-slayder 
	{
  	position: relative;
  	width: 400px;
  	height: 300px;
  	margin: 20px auto;
	}

	.adaptivny-slayder input[name="kadoves"] {
	  display: none;
	}

	.kadoves {
	  position: absolute;
	  left: 0;
	  bottom: -10px;
	  text-align: center;
	  width: 100%;
	}

	.kadoves label {
		display: inline-block;
	  width: 15px;
	  height: 15px;
	  cursor: pointer;
	  margin: 0 3px;
	  border-radius: 50%;
	  background-color: #738290;
	  background-color: #C4C4C4;
	}

	#slaid1:checked~.kadoves label[for="slaid1"] {
	  background-color: #595959;
	}

	#slaid2:checked~.kadoves label[for="slaid2"] {
	  background-color: #595959;
	}

	#slaid3:checked~.kadoves label[for="slaid3"] {
	  background-color: #595959;
	}

	.adaptivny-slayder-lasekun {
	  overflow: hidden;

	  border: 1px solid #000000;
		box-sizing: border-box;
	   
	}

	.abusteku-deagulus {
	  display: flex;
	  width: 100%;
	  transition: all 0.5s;
	}

	.abusteku-deagulus img {
	  width: 100%;
	  flex-shrink:0;
	}

	.description
	{
		margin-top: 35px;
		font-family: Montserrat;
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 22px;
		text-align: center;

		color: #393939;

	}

	#slaid1:checked~adaptivny-slayder-lasekun abusteku-deagulus {
	  transform: translate(0);
	}

	#slaid2:checked~.adaptivny-slayder-lasekun .abusteku-deagulus {
	  transform: translateX(-100%);
	}

	#slaid3:checked~.adaptivny-slayder-lasekun .abusteku-deagulus {
	  transform: translateX(-200%);
	}
</style>