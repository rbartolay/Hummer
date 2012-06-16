<?php
class CompaniesDao extends DataAccessObject {
	
	public function retrieveAllCompanies() {
		#$sql = "select company, count(*) as job_count from jobs where company != '' group by company";
		$sql = "select company_id, name, 
				unix_timestamp(date_created) as unix_date_created, 
				unix_timestamp(date_modified) as date_modified 
				from companies where flag = 0";
		return $this->getConnection()->getResultSetObjectArrayPK($sql, "company_id");
	}
	
	public function insertRecord($record) {
		return $this->getConnection()->insert("companies", $record);
	}
	
	public function retrieveAllCompaniesByFirstChar($char) {
		$sql = "select company, count(*) as job_count, date_posted as last_entry from jobs where company like '". $char ."%' and company != '' group by company order by company, date_posted";
		return $this->getConnection()->getResultSetObjectArray($sql);
	}
	
	public function retrieveRecentActiveCompanies() {
		$sql = "select company, count(*) as job_count, date_posted as last_entry from jobs group by company order by date_posted desc limit 10";
		return $this->getConnection()->getResultSetObjectArray($sql);
	}
	
	public function retrieveCompanyIdByCompanyName($company_name) {
		$sql = "select company_id from companies where name = '". $company_name ."'";
		return $this->getConnection()->getResultSet($sql);
	}
	
	public function retrieveCompanyByCompanyName($company_name) {
		$sql = "select * from companies where name = '". $company_name ."'";
		return $this->getConnection()->getResultSet($sql);
	}
}