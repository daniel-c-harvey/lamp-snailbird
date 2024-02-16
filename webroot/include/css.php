<?php
	function linkToStylesheet(string $cssFile)
	{
		echo '<link rel="stylesheet" type="text/css" href="css/' . $cssFile . 
			'?v=' . getCSSVersion($cssFile) . '">' . "\n";
	}
	
	function getCSSVersion(string $cssFile)
	{
		return filemtime($_SERVER['DOCUMENT_ROOT'] . '\\css\\' . $cssFile);
	}