<?php
class Core_URL implements BusinessObjectModel {
	
	private $url;
	private $module;
	private $controller;
	private $method;
	private $queryString;
	
	public function __construct() {
		$this->url = self::getCleanURL() != null ? self::getCleanURL() : Configuration::getDefaultURL();
		$this->parseURL();
	} 
	
	private function parseURL() {
		$urlArray = array();
		$urlArray = explode("/", $this->url);
	
		$module = strlen($urlArray[0]) > 0 ? $urlArray[0] : Configuration::DEFAULT_CONTROLLER;
		$this->module = ucfirst($module);
		$this->controller = $this->module . "Controller";
	
		array_shift($urlArray);
		$this->method = strlen(@$urlArray[0]) > 0 ? $urlArray[0] : Configuration::DEFAULT_METHOD;
	
		if(count($urlArray) > 0) {
			array_shift($urlArray);
			$this->queryString = $urlArray;
		} else {
			$this->queryString = array();
		}
	}
	
	public static function getCleanURL() {
		$url = explode("?", @substr($_SERVER['REQUEST_URI'], 1));
		return $url[0];
	}
	
	public function getURL() {
		return $this->url;
	}

	public function getModule() {
		return $this->module;
	}
	
	public function getController() {
		return $this->controller;
	}
	
	public function getMethod() {
		return $this->method;
	}
	
	public function getQueryString() {
		return $this->queryString;
	}
}