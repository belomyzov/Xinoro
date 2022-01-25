<html>
	<head>
		<link rel="stylesheet" type="text/css" href="vendor/css/panel.css">
	</head>
	<body>
		<header>
			<a href="admin/panel" class="logo"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/logob.png?raw=true" alt=""></a>
			<!-- Menu start -->
			<div class="nav">
				<ul>
					<li><a href="admin/panel"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/content"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Page-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/database"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-User-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/setting"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Setting-Icon.png?raw=true" alt=""></a></li>
				</ul>
			</div>
			<!-- Menu end -->
		</header>
		<content>
			<div class="info-box">
				<!-- Edit panel start -->
				<div class="buttons">
					<div class="label">Pages</div>
					<div onclick="openPageControll();" class="addpages">добавить</div>
				</div>
				<!-- Edit panel stop -->
				<!-- Вывод всех страниц -->
				<div class="pages">
					<?php
						$pages = json_decode(file_get_contents("config/routes.json"),true);
						foreach($pages['routes'] as $value)
						{
							# Передача переменных из routes.json 
							# URL - 0 (string)
							# Controller - 1 (string)
							# Action - 2 (string)
							# Title - 3 (string) 

							# openInEditor() - javascript(func) - Открытие страницы в редакторе

							$editKey = "'".$value[1]."','".$value[2]."'";
							echo '<div onclick="openInEditor('.$editKey.');" class="page">
									<div class="url">'.$value[3].'</div></div>';
						}
					?>
				</div>
			</div>
			<style type="text/css">
				.modal-box
				{
					position: absolute;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background: rgba(0, 0, 0, 0.3);;
					width: 100%;
					height: 100%;
				}

				.box-add
				{
					margin: auto;
					margin-top: 10%;
					width: 382px;
					height: 343px;
					background: #171C28;
					box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25);
					border-radius: 5px;
				}
			</style>
		</content>
		<div id="create-page-controll" class="modal-box">
			<div class="box-add">
				<div class="label-func">Создание страницы</div>
				<input type="text" id="url" placeholder="Url">
				<input type="text" id="controller" placeholder="Controller">
				<input type="text" id="action" placeholder="Action">
				<input type="text" id="title_page" placeholder="Название страницы">
				<div onclick="createPage();" class="create-page-btn">Создать</div>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	let pageControll = document.getElementById("create-page-controll");
	let inputUrl = document.getElementById("url");
	let inputController = document.getElementById("controller");
	let inputAction = document.getElementById("action");
	let inputTitle = document.getElementById("title_page");
	pageControll.hidden = true;

	function openPageControll()
	{
		pageControll.hidden = false;
	}

	function createPage()
	{
		window.location.href = 'admin/panel?createpage&u='+inputUrl.value+'&c='+inputController.value+'&a='+inputAction.value+'&t='+inputTitle.value;
	}

	function openInEditor(contoller, action)
	{
		window.location.href = 'admin/editor?pageedit&c='+contoller+'&a='+action;
	}
</script>
<!-- <script type="text/javascript" src="vendor/js/panel.js"></script> -->