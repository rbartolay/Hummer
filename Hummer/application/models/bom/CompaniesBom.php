<?php
class CompaniesBom implements BusinessObjectModel {
	
	private $cDao;
	
	public function __construct() {
		$this->cDao = new CompaniesDao();
	}
	
	public function getAllCompanies() {
		return $this->cDao->retrieveAllCompanies();
	}
	
	public function getAllCompanyNames() {
		$companies = $this->cDao->retrieveAllCompanies();
		
		$return = array();
		
		foreach($companies as $company_id => $company_details) {
			$return[$company_id] = $company_details->name;
		}
		
		return $return;
	}
	
	public function isCompanyExistsByCompanyName($company_name) {
		return !is_null($this->cDao->retrieveCompanyByCompanyName($company_name));
	}
	
	public function getAllCompaniesByFirstChar($char) {
		return $this->cDao->retrieveAllCompaniesByFirstChar($char);
	}
	
	public function getRecentActiveCompanies() {
		return $this->cDao->retrieveRecentActiveCompanies();
	}
	
	public function insertRecord($record) {		
		$record->date_created = Calendar::getSQLDateTime();
		return $this->cDao->insertRecord($record);
	}
}
