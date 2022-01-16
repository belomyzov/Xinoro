<html>
	<head>
		<link rel="stylesheet" type="text/css" href="vendor/css/panel.css">
	</head>
	<body>
		<header>
			<a href="admin/panel" class="logo"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/logob.png?raw=true" alt=""></a>
			<div class="nav">
				<ul>
					<li><a href="admin/panel"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/content"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Page-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/database"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-User-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/setting"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Setting-Icon.png?raw=true" alt=""></a></li>
				</ul>
			</div>
		</header>
		<content>
			<iframe src="http://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo json_decode(file_get_contents("config/setting.json"),true)['base_url']; ?><?php echo $_GET['c']."/".$_GET['a'] ?>" width="110%" height="895px" align="left">
			    Ваш браузер не поддерживает плавающие фреймы!
			</iframe>
			<div class="editor-box">
				<div id="tabsEditor" class="tabs">
					<div id="t1" class="tabs-box">Php</div>
					<div id="t2" class="tabs-box">Css</div>
					<div id="t3" class="tabs-box">Js</div>
					<div id="t4" class="tabs-box">Store</div>
				</div>
				<form method='POST' action=''>
					<!-- t1 -->
 					<textarea name="file"><?php echo file_get_contents("core/views/".$_GET['c']."/".$_GET['a'].".php"); ?></textarea>
					<input type='submit' class="btn-box" name='savepages' value='Обновить'>
					<!-- t2 -->
<!-- 					<?php 
						if(is_file("core/views/".$_GET['c']."/".$_GET['a']."_style.json")) 
						{
							$include_file = json_decode(file_get_contents("core/views/".$_GET['c']."/".$_GET['a']."_style.json"),true);
							foreach($include_file["css"] as $value)
							{
							echo '
								<div class="style-box">
									<div class="style-label">'.$value.'</div>
									<div class="style-edit-btn">Edit</div>
									<div class="style-delete-btn">Удалить</div>
								</div>
							';
							}
						}
					?>
					<div class="style-box style-label create-style-btn">Создать</div> -->
				</form>
			</div>
		</content>
	</body>
</html>
<script type="text/javascript">
</script>