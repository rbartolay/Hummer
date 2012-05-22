<?php
require_once "application/Configuration.php";
require_once Configuration::getModulesPath().'default'.DS.'models'.DS.'bom'.DS.'Default.bom.php';
require_once Configuration::getModulesPath().'career'.DS.'models'.DS.'bom'.DS.'Career.bom.php';
require_once Configuration::getModulesPath().'banner_management'.DS.'models'.DS.'bom'.DS.'BannerManagement.bom.php';
require_once Configuration::getModulesPath()."employer_management" . DS . "models" . DS . "bom" . DS . "EmployerManagement.bom.php";
require_once Configuration::getModulesPath()."search" . DS . "models" . DS . "bom" . DS . "Search.bom.php";

/**
 * This is the default controller for the application
 * @author rbartolay
 */
class DefaultController extends Controller {
	private $template = "account";
	private $defaultBom = null;

	/**
	 * the main index if no url request are being called, this is the 
	 * default controller
	 */
	public function index() {
		new Template('main', 'default', 'index');
	}

	public function search() {
		new Template($this->template, "default", "index");
	}
	
	public function about() {
		new Template($this->template, "default", "about");
	}
	
	public function ourServices() {
		new Template($this->template, "default", "ourServices");
	}
	
	public function contactUs() {
		new Template($this->template, "default", "contactUs");
	}
	
	public function siteMap() {
		new Template($this->template, "default", "siteMap");
	}
	
	public function assessmentTools() {
		new Template($this->template, "default", "assessmentTools");
	}
	
	public function advertiseWithUs(){
		new Template($this->template, "default", "advertiseWithUs");
	}
	
	public function hiringCompanies(){
		new Template($this->template, "default", "hiringCompanies");
	}
	
	public function jobListings(){
		new Template($this->template, "default", "jobListings");
	}
	
	public function virtualJobFair(){
		new Template($this->template, "default", "virtualJobFair");
	}
	
	/**
	 * Main login form, creates and sets the template, recieves a parameter message
	 */
	public function login($message = null, $next = null) {
		$template = new Template($this->template, "default", "login");
		
		if($message != null || $message != "") {
			$template->setAttribute('message', Messages::$message());
		}
	}
	
	/**
	* Main login form for Employers, creates and sets the template, recieves a parameter message
	*/
	public function loginEmployer($message = null) {
		$template = new Template($this->template, "default", "loginEmployer");
		if($message != null) {
			$template->setAttribute('message', Messages::$message());
		}
	}

	/**
	 * Process the login values, sends the user back to main login if values are not correct
	 */
	public function ProcessLogin() {
		$defaultBom = new DefaultBom();
		$Request = new stdClass();
		$Request->email = $_POST['txtLoginEmail'];
		$Request->password = $_POST['txtLoginPassword'];

		$Response = $defaultBom->validateLogin($Request);		

		if($Response->success) {
			$defaultBom->buildUserSession($Response->data->user_id);
			header("Location: /profile");
		} else {
			header("Location: /default/login/errorLogin");
		}
	}
	
	public function view($career_id) {
		$careerBom = new CareerBom();
		$careerPost = $careerBom->getCareerPostById($career_id);
		
		$careerBom->careerPostClick($careerPost);
		
		$template = new Template("default","default","view");
		$template->setAttribute("careerpost", $careerPost);
	}
	
	public function employer($employer_id) {
		$eBom = new EmployerManagementBom();
		$Employer = $eBom->getEmployerDetailsByID($employer_id);
		$Industry = new Industries();
		
		$Search = new SearchBom();
		$obj = new stdClass();
		$obj->employer_id = $employer_id;
		$Result = $Search->getSearchResult($obj);
		
		$template = new Template("account", "default","viewEmployer");
		$template->setAttribute("Employer", $Employer);
		$template->setAttribute("industryDetail", $Industry);
		$template->setAttribute("employerId", $employer_id);
		$template->setAttribute("searchDetails",$Result);
	}
	
	public function bannerClick($banner_id) {
		$bannerBom = new BannerManagementBom();
		$Response = $bannerBom->bannerClick($banner_id);
		
		header("Location: ".$Response->banner_url);
	}

	public function logout() {
		session_destroy();
		header("Location: /default/login");
	}
}