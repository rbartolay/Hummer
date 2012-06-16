<?php 
class IndeedBom implements BusinessObjectModel {
	
	private $jBom;
	
	public function __construct() {
		$this->jBom = new JobsBom();
	}
	
	public function getAllRecords() {		
		return $this->jBom->getAllJobsByAPISourceId(1);
	}
	
	public function insertRecords($records) {
		$jobkeys = $this->getAllJobsKey();
		
		$cBom = new CompaniesBom();
		$companies = $cBom->getAllCompanyNames();
		
		foreach($records as $record) {
			
			$record->api_source_id = 1;
			
			// checks if company is existing on our database
			if(!$cBom->isCompanyExistsByCompanyName($record->company)) {
				$data = new stdClass();
				$data->name = $record->company;
				
				$cBom->insertRecord($data);
			}
			
			// checks if job key is already existing on our database
			if(in_array($record->jobkey, $jobkeys)) {
				$condition = array('jobkey' => $record->jobkey);
				echo "Update " . $record->jobkey . "<br>";				
				unset($record->formattedlocation, $record->date, $record->onmousedown, $record->formattedlocationfull, $record->jobkey, $record->formattedrelativetime);
				var_dump($this->jBom->updateRecord($record, $condition));				
			} else {
				$record->date_posted = Calendar::formatStringToSQLDateAndTime($record->date);
				$record->date_created = Calendar::getSQLDateTime();
				echo "Insert " . $record->jobkey . "<br>";
				unset($record->formattedlocation, $record->date, $record->onmousedown, $record->formattedlocationfull, $record->formattedrelativetime);
				var_dump($this->jBom->insertRecord($record));
			}
		}
	}	
	
	public function getAllJobsKey() {
		return $this->jBom->getAllJobsKeyByAPISourceId(1);
	}
}
