<?php 
class JobsDao extends DataAccessObject {
	
	public function retrieveAllByAPISourceId($api_id) {
		$sql = "select *, unix_timestamp(date_posted) as unix_date from jobs where api_source_id = " . $api_id . " order by date_posted desc";
		return $this->getConnection()->getResultSetObjectArrayPK($sql, "job_id");
	}
	
	public function retrieveJobKeysByAPISourceId($api_id) {
		$sql = "select jobkey from jobs where api_source_id = " . $api_id;
		return $this->getConnection()->getResultSetSingleColumn($sql, "jobkey");
	}
	
	public function insertRecord($data) {
		return $this->getConnection()->insert("jobs", $data);
	}
	
	public function updateRecord($data, $condition) {
		return $this->getConnection()->update("jobs", $data, $condition);		
	}
}
?>