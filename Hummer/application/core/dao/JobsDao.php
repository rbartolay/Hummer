<?php 
class JobsDao extends DataAccessObject {
	
	public function retrieveAllByAPISourceId($api_id) {
		$sql = "select * from jobs where api_source_id = " . $api_id;
		return $this->getConnection()->getResultSetObjectArrayPK($sql, "job_id");
	}
	
	public function insertRecord($data) {
		return $this->getConnection()->insert("jobs", $data);
	}
	
	public function updateRecord($data) {
		return $this->getConnection()->update("jobs", $data, "job_id");		
	}
	
}

?>