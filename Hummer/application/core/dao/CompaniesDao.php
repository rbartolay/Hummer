<?php
class CompaniesDao extends DataAccessObject {
	
	public function retrieveAllCompanies() {
		$sql = "select company, count(*) as job_count from jobs where company != '' group by company";
		return $this->getConnection()->getResultSetObjectArray($sql);
	}
	
	public function retrieveAllCompaniesByFirstChar($char) {
		$sql = "select company, count(*) as job_count, date_posted as last_entry from jobs where company like '". $char ."%' and company != '' group by company order by company, date_posted";
		return $this->getConnection()->getResultSetObjectArray($sql);
	}
}