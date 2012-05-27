<?php
/**
 * Main Configuration file for the bch website application this class can be called dynamically or statically,
 * whole configuration of paths and configuration of the application are here.
 * @author Ryan Bartolay
 *
 * Usage
 * echo Configuration::getCSSPath() . "style.css";
 * require_once Configuration::getBusinessObjectModelPath() . "File.core.php";
 */
class Configuration {
	
	/**
	 * this is basically the site control (Bootstrap.php) in the root. Lets route all
	 * pages to site maintenance page if this is true.
	 * @var unknown_type
	 */
	private static $siteOffline = false;

	/**
	 * This path will be used in accessing css, js, ajax, images files.
	 */
	private static $url = "http://localhost";
	
	const DEFAULT_CONTROLLER = "default";
	
	const DEFAULT_METHOD = "index";
	
	const DISPLAY_ERRORS = true;
	
	private static $default_page = "index";
	private static $default_header_page = "header.php";
	private static $default_footer_page = "footer.php";

	private static $page_not_found = "page_not_found.php";	
	
	/**
	 * As we might be looking to multiple database in the future, we placed all database setting
	 * in an array to give way to next connections
	 */
	private static $databaseSettings = array(
		'default' =>  array(
			'host' => 'localhost',
			'username' => 'root',
			'password' => '',
			'databaseName'=> 'bchv2',
			'port' => 3306)
	);

	public static function isSiteOffline() {
		return self::$siteOffline;
	}

	public static function getDatabaseSettings($name) {
		return self::$databaseSettings[$name];
	}

	public static function getPageNotFound() {
		return self::$page_not_found;
	}

	public static function getDefaultPage() {
		return self::$default_page;
	}

	public static function getDefaultURL() {
		return self::DEFAULT_CONTROLLER . "/" . self::DEFAULT_METHOD;
	}
	public function setURLPath($url) {
		$this->url = $url;
	}

	public static function getURLPath() {
		return self::$url;
	}

	public static function getBasePath() {
		return $_SERVER['DOCUMENT_ROOT'];
	}

	public static function getApplicationPath() {
		return self::getBasePath() . DS . "application" . DS;
	}

	public static function getCOREPath() {
		return self::getApplicationPath() . "core" . DS;
	}

	public static function getTemplatesPath() {
		return self::getApplicationPath() . "templates" . DS;
	}
	
	public static function getModulesPath() {
		return self::getApplicationPath() . "modules" . DS;
	}

	public static function getXMLPath() {
		return self::getApplicationPath() . "xml" . DS;
	}

	public static function getCSSPath() {
		return self::getURLPath() . '/resources/css/';
	}

	public static function getJSPath() {
		return self::getURLPath() . '/resources/js/';
	}

	public static function getImagePath() {
		return self::getURLPath() . '/resources/images/';
	}

	public static function getBusinessObjectModelsPath() {
		return self::getCOREPath() . "bom" . DS;
	}

	public static function getDatabaseAccessObjectPath() {
		return self::getCOREPath() . "dao" . DS;
	}

	public static function getHelpersPath() {
		return self::getCOREPath() . "helpers" . DS;
	}

	private static function getInterfacesPath() {
		return self::getCOREPath() . "interfaces" . DS;
	}
	public static function getInterfacePath() {
		return self::getInterfacesPath() . "interface" . DS;
	}
	
	public static function getAbstractPath() {
		return self::getInterfacesPath() . "abstract" . DS;
	}

	public static function getControllersPath() {
		return self::getCOREPath() . "controllers" . DS;
	}

	public static function getConstantsPath() {
		return self::getCOREPath() . "constants" . DS;
	}
	
	public static function getUploadedImagesPath() {
		return self::getURLPath() . '/resources/images/users/';
	}
	
	public static function getUploadImagesBasePath() {
		return self::getBasePath(). '/resources/images/users/';
	}
	
	public static function getUploadedResumePath() {
		return self::getURLPath() . '/resources/resumes/';
	}
	
	public static function getUploadResumeBasePath() {
		return self::getBasePath(). '/resources/resumes/';
	}
}