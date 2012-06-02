<?php
class CareerjetBom implements BusinessObjectModel {
	
	private $jDao;
	
	public function __construct() {
		$this->jDao = new JobsDao();
	}
	
	public function insertRecords($records) {
		
		var_dump($records);
		foreach($records['jobs'] as $record) {
			$record->location = $record->locations;
			$record->website = $record->site;
			$record->snippet = $record->description;
			unset($record->locations, $record->site, $record->salary, $record->description, $record->title);
			$this->jDao->insertRecord($record);
		}
	}	
}
?>