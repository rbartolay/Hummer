<?php
class CompaniesController extends Controller {
	
	public function index($param = null) {
		$param = $param == null ? 'A' : $param;
		$cBom = new CompaniesBom();
		$template = new Core_Template("default", "companies");
		$template->setAttribute("companies", $cBom->getAllCompaniesByFirstChar($param));
		$template->setAttribute("current", $param);	
	}
	
	public function view($param = null) {
		$jBom = new JobsBom();
		$template = new Core_Template("default", "companies", "view");
		$template->setAttribute("jobs", $jBom->getAllJobsByCompanyName($param));
	}
}