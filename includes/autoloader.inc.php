<?php
	spl_autoload_register('classLoader');

	function classLoader($class){
		$dic = "classes/";
		$extension = ".class.php";
		$path = $dic . strtolower($class) . $extension;
		include_once $path;
	}
