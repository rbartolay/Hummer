<?php
class Dispatcher {
	
	private $core_constants = array();
	private $core_bom = array(
					'Core_Database', 
					'Core_Email', 
					'Core_Hook', 
					'Core_Logger', 
					'Core_Security', 
					'Core_Server', 
					'Core_Session',
					'Core_ModuleSecurity', 
					'Core_Template', 
					'Core_Utilities', 
					'Core_XMLParser', 
					'Core_URL');
	private $core_dao = array();
	private $core_helpers = array('URL');
	private $core_interface = array('AbstractFactory', 'BusinessObjectModel', 'Comparable', 'CRUD', 'Singleton');
	private $core_abstract = array('Controller', 'DataAccessObject', 'XML', 'Pagination');
	
	private $model_name = null;
	
	public function __construct($model_name) {
		$this->model_name = $model_name;
	}
	
	public function isModule() {
		return in_array($this->model_name, $this->modules);	
	}
	
	public function getModules() {
		return $this->modules;
	}
	
	public function isCoreConstant() {
		return in_array($this->model_name, $this->core_constants);
	}
	
	public function getCoreConstants() {
		return $this->core_constants;
	}
	
	public function isCoreBom() {
		return in_array($this->model_name, $this->core_bom);
	}
	
	public function getCoreBom() {
		return $this->core_bom;
	}
	
	public function isCoreDao() {
		return in_array($this->model_name, $this->core_dao);
	}
	
	public function getCoreDao() {
		return $this->core_dao;	
	}
	
	public function isCoreHelper() {
		return in_array($this->model_name, $this->core_helpers);
	}
	
	public function getCoreHelpers() {
		return $this->core_helpers;
	}
	
	public function isCoreInterface() {
		return in_array($this->model_name, $this->core_interface);
	}
	
	public function getCoreInterfaces() {
		return $this->core_interface;
	}

	public function isCoreAbstract() {
		return in_array($this->model_name, $this->core_abstract);
	}
	
	public function getCoreAbstracts() {
		return $this->core_abstract;
	}
	
	public function __toString() {
		return $this->model_name;
	}
}