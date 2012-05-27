<?php
/**
 * get the main configuration
 */
require_once ROOT . DS . "application". DS ."Configuration.php";

/**
 * get the dispatcher configuration
 */
require_once ROOT . DS . "application". DS ."Dispatcher.configuration.php";

/**
 * Bootstrap
 * Loads all the necessary class and files
 */
ini_set('display_errors', Configuration::DISPLAY_ERRORS);

/**
 ** This is essential for the date() method to determine the correct system settings
 ** as the server is deployed from other country
 **/
$timezone = "Asia/Manila";
date_default_timezone_set ($timezone);

try {
	session_start();
} catch (Exception $e) {
	die($e->getMessage());
}

if(!defined("DS")) {
	define("DS", DIRECTORY_SEPARATOR);
}

/**
 * Get controller hook
 */
require_once Configuration::getBusinessObjectModelsPath() . 'Core_Hook.php';
$hook = new Core_Hook();


function __autoload($className) {
	
	$dispatcher = new Dispatcher($className);
		
	if($dispatcher->isCoreInterface()) {
		require_once Configuration::getInterfacePath() . $className . ".interface.php";
	}
	
	if($dispatcher->isCoreController()) {
		require_once Configuration::getControllersPath() . $className . ".php";
	}
	
	if($dispatcher->isCoreBom()) {
		require_once Configuration::getBusinessObjectModelsPath() . $className . ".php";
	}
	
	if($dispatcher->isCoreDao()) {
		require_once Configuration::getDatabaseAccessObjectPath() . $className . '.php';
	}
	
	if($dispatcher->isCoreConstant()) {
		require_once Configuration::getConstantsPath() . $className . ".constants.php";
	}
	
	if($dispatcher->isCoreHelper()) {
		require_once Configuration::getHelpersPath() . $className . ".helper.php";
	}
	
	if($dispatcher->isCoreAbstract()) {
		require_once Configuration::getAbstractPath() . $className . '.abstract.php';
	}
}