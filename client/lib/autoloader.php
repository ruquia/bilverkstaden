<?php

// We expect clases to be stored in the classes folder
// with only small characters consisting of the class name 
// followed by ".class.php"
function classAutoloader($class) {
	include (strtolower('classes/'.$class.'.class.php'));
}

spl_autoload_register('classAutoloader');