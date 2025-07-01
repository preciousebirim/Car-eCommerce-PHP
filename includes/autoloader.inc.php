<?php
	spl_autoload_register('classLoader');

	function classLoader($class){
		$dic = __DIR__."/../classes/";
		$extension = ".class.php";
		$path = $dic . strtolower($class) . $extension;
		require_once $path;
	}
