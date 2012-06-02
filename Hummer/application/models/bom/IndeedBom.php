<?php 
class IndeedBom implements BusinessObjectModel {
	
	public function getAllRecords() {
		$jDao = new JobsDao();
		return $jDao->retrieveAllByAPISourceId(1);
	}
	
	public function insertRecords($records) {
		$jDao = new JobsDao();
		
		foreach($records as $record) {
			$record->date_created = Calendar::getSQLDateTime();
			$record->api_source_id = 1;
			unset($record->formattedlocation);
			var_dump($jDao->insertRecord($record));
		}
	}
	
}
