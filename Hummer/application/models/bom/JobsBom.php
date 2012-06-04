<?php 
class JobsBom implements BusinessObjectModel {
	
	private $jDao;
	
	public function __construct() {
		$this->jDao = new JobsDao();
	}
	
	public function getAllJobs() {
		return $this->jDao->retrieveAll();
	}
	
	private function formatJobs($jobs) {
		foreach($jobs as $job) {
			
		}	
	}
}
?>