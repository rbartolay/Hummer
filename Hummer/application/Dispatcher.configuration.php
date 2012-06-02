<?php
class Dispatcher {
	
	private $bom = array('IndeedBom');
	private $dao = array();
	
	private $core_constants = array('DomainNames', 'APIIndeed');
	private $core_controllers = array('DefaultController', 'CronController');
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
					'Core_XMLCreate',
					'Core_XMLParser', 
					'Core_URL',
					'Core_CURL');
	private $core_dao = array('JobsDao');
	private $core_helpers = array('URL', 'Calendar', 'JobLayout');
	private $core_interface = array('AbstractFactory', 'BusinessObjectModel', 'Comparable', 'CRUD', 'Singleton');
	private $core_abstract = array('Controller', 'DataAccessObject', 'XML', 'Pagination', 'APIParser');
	
	private $model_name = null;
	
	public function __construct($model_name) {
		$this->model_name = $model_name;
	}
	
	public function isBom() {
		return in_array($this->model_name, $this->bom);
	}
	
	public function getBoms() {
		return $this->bom;
	}
	
	public function isDao() {
		return in_array($this->model_name, $this->dao);
	}
	
	public function getDaos() {
		return $this->dao;
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
	
	public function isCoreController() {
		return in_array($this->model_name, $this->core_controllers);
	}
	
	public function getCoreControllers() {
		return $this->core_controllers;
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