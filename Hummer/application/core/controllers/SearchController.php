<?php 
class SearchController extends Controller {
	public function index() {
		$cBom = new CompaniesBom();
		$template = new Core_Template("default", "search", "advance");
		$template->setAttribute("companies", $cBom->getRecentActiveCompanies());
	}
	
	public function quick() {
		$keyword = $this->Request->get->keyword;
		
		$jBom = new JobsBom();
		$template = new Core_Template("default", "search", "results");
		$template->setAttribute("results", $jBom->getAllJobsByQuickSearch($keyword));
		$template->setAttribute("keyword", $keyword);
	}
	
	public function advance() {		
		$page = isset($this->Request->get->page) ? $this->Request->get->page : 1;
		
		$jBom = new JobsBom();
		$Response = $jBom->getAllJobsByAdvanceSearch($this->Request->get, $page);
		$template = new Core_Template("default", "search", "advanceResults");
		$template->setAttribute("results", $Response->data);
		$template->setAttribute("pages", $Response->pages);
		$template->setAttribute("current_page", $Response->current_page);
		$template->setAttribute("criteria", $this->Request->get);
	}
}

?>