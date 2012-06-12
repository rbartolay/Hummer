<?php 
class JobsBom implements BusinessObjectModel {
	
	private $jDao;
	
	public function __construct() {
		$this->jDao = new JobsDao();
	}
	
	public function getAllJobs($page) {
		$jDao = new JobsDao();
		$jDao->getConnection()->enablePagination();
		$jDao->getConnection()->setPage($page);
		
		$Response = new stdClass();
		$Response->data = $jDao->retrieveAll();
		$Response->record_count = $jDao->getConnection()->getRecordsCount();
		$Response->pages = $jDao->getConnection()->getPages();
		$Response->current_page = $jDao->getConnection()->getPage();
		 
		return $Response;
	}
	
	public function getAllRecentJobs() {
		return $this->jDao->retrieveRecentJobs();
	}
	
	public function getAllJobsByCompanyName($company) {
		return $this->jDao->retrieveAllByCompanyName(urldecode($company));
	}
	
	public function getJobsByCompanyName($company) {
		return $this->jDao->retrieveJobsByCompanyName(urldecode($company));
	}
	
	public function getJobByJobId($job_id) {
		return $this->jDao->retrieveJobByJobId($job_id);
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
