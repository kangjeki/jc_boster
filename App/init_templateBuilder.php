<?php
spl_autoload_register(function($class) {
	require_once "TemplateBuilder/". $class . ".php";
});
