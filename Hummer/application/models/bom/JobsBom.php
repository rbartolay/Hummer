<?php 
class JobsBom implements BusinessObjectModel {
	
	private $jDao;
	
	public function __construct() {
		$this->jDao = new JobsDao();
	}
	
	public function getAllJobs() {
		$jDao = new JobsDao();
		$jDao->getConnection()->enablePagination();
		$jDao->getConnection()->setPage(2);
		
		$Response = new stdClass();
		$Response->data = $jDao->retrieveAll();
		$Response->record_count = $jDao->getConnection()->getRecordsCount();
		$Response->pages = $jDao->getConnection()->getPages();
				
		return $Response;
	}
	
	public function getAllRecentJobs() {
		return $this->jDao->retrieveRecentJobs();
	}
	
	public function getAllJobsByCompanyName($company) {
		return $this->jDao->retrieveAllByCompanyName(urldecode($company));
	}
	
	public function getAllJobsByQuickSearch($keyword) {
		$results = $this->jDao->retrieveByQuickSearch($keyword);
		
		foreach($results as $result) {
			$result->company = Core_Utilities::highlightString($keyword, $result->company);
			$result->jobtitle = Core_Utilities::highlightString($keyword, $result->jobtitle);
			$result->snippet = Core_Utilities::highlightString($keyword, $result->snippet);
		}
		
		return $results;
	}
	
	public function getTrendingJobs() {
		return $this->jDao->retrieveTrendingJobs();
	}
}
?>
