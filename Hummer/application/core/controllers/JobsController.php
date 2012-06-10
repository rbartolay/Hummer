<?php 
class JobsController extends Controller {
	public function index() {
		new Template("default", "jobs");
	}	
}
?>