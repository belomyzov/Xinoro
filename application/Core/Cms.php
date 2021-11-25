<?php 

	function getRaw($path, $file)
	{
		return file_get_contents("https://raw.githubusercontent.com/xoheveras/CMS/main/cms_vendor/".$path."/".$file);
	}

?>