<?php 
class IndeedBom implements BusinessObjectModel {
	
	private $jDao;
	
	public function __construct() {
		$this->jDao = new JobsDao();
	}
	
	public function getAllRecords() {		
		return $this->jDao->retrieveAllByAPISourceId(1);
	}
	
	public function insertRecords($records) {
		$jobkeys = $this->getAllJobsKey();
		
		foreach($records as $record) {
			
			$record->api_source_id = 1;
			
			if(in_array($record->jobkey, $jobkeys)) {
				$condition = array('jobkey' => $record->jobkey);
				echo "Update " . $record->jobkey . "<br>";				
				unset($record->formattedlocation, $record->date, $record->onmousedown, $record->formattedlocationfull, $record->jobkey);
				var_dump($this->jDao->updateRecord($record, $condition));				
			} else {
				$record->date_posted = $this->formatDate($record->date);
				$record->date_created = Calendar::getSQLDateTime();
				echo "Insert " . $record->jobkey . "<br>";
				unset($record->formattedlocation, $record->date, $record->onmousedown, $record->formattedlocationfull);
				var_dump($this->jDao->insertRecord($record));
			}
		}
	}
	
	public function formatDate($date) {
		$dt = new DateTime($date);
		return $dt->format("Y-m-d h:i:s");
	}
	
	public function getAllJobsKey() {		
		return $this->jDao->retrieveJobKeysByAPISourceId(1);
	}
	
}
