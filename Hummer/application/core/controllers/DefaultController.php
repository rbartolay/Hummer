<?php
class DefaultController extends Controller {
		
	public function index() {
		$jBom = new JobsBom();
		$cBom = new CompaniesBom();
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $jBom->getAllRecentJobs());
		$template->setAttribute("companies", $cBom->getRecentActiveCompanies());
		$template->setAttribute("trending_jobs", $jBom->getTrendingJobs());
		$template->setAttribute("featured_company", $cBom->getFeaturedCompany());
	}
	
	public function login() {
		new Core_Template("default", "default", "login");
	}
	
	public function logout() {
		session_destroy();
		header("Location: ". Configuration::getURLPath() ."/default/login");
	}
	
	public function clueTip() {
		new Core_Template("default", "default", "clueTip");
	}
	
	public function privacy() {
		new Core_Template("default", "default", "privacy");
	}
	
	public function about() {
		new Core_Template("default", "default", "aboutUs");
	}
}