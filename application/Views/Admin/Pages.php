<!--  <?php foreach (searchPHP() as $key => $value) { echo "<option>".$value."</option>"; } ?>

<?php echo getRaw("css","panel.css"); ?>
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
		<title>Панель администратора</title>
	</head>
	<body class="">

		<div class="Menu-box">
			<div class="Menu-item-box">
				<a href="../"><img class="logo" src="https://raw.githubusercontent.com/xoheveras/CMS/main/vendor/image/logocms.png"></a>
				<ul>
					<li><a href="../admin/panel"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/stats-chart.png"></a></li>
					<li><a href="../admin/pages"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/document-sharp.png"></a></li>
					<li><a href="../admin/setting"><img src="https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/image/hammer-sharp.png"></a></li>
				</ul>
			</div>
		</div>
		<div class="item-box">
			<div class="info-box-file">
				<div class="info-box-box">
					<p class="sub-text">Файлы проекта</p>
					<select size="24">
						<?php 
							foreach (searchPHP() as $key => $value) { echo "<option>".$value."</option>"; } 
							echo "<option></option>";
							foreach (searchStyleAndJs("css") as $key => $value) { echo "<option>".$value."</option>"; }
							echo "<option></option>";
							foreach (searchStyleAndJs("js") as $key => $value) { echo "<option>".$value."</option>"; }
						?>
					</select>
				</div>
			</div>
			<div class="info-box-form">
				<form action="pages" method="post">
					<p class="sub-text">Создание страниц</p>
					<input class="text-form" type="text" name="folder" placeholder="Folder">
					<input class="text-form" type="text" name="controller" placeholder="Controller">
					<input class="text-form" type="text" name="action" placeholder="Action">
					<input class="save-btn" style="margin-top: 185px;" type="submit" name="createPageBtn" value="Сохранить">
				</form>
			</div>
		</div>
		<div class="editor-box">
			<div class="info-box-editor">
				<form>
					<textarea></textarea>
					<input class="save-btn" type="submit" name="" value="Сохранить">
				</form>
			</div>
		</div>

		<style type="text/css"> 
			<?php echo file_get_contents("cms_vendor/css/pages.css") ?>
		</style>
	</body>
</html>