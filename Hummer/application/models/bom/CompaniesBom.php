<?php
class CompaniesBom implements BusinessObjectModel {
	
	private $cDao;
	
	public function __construct() {
		$this->cDao = new CompaniesDao();
	}
	
	public function getAllCompanies() {
		return $this->cDao->retrieveAllCompanies();
	}
	
	public function getAllCompaniesByFirstChar($char) {
		return $this->cDao->retrieveAllCompaniesByFirstChar($char);
	}
	
	public function getRecentActiveCompanies() {
		return $this->cDao->retrieveRecentActiveCompanies();
	}
}
