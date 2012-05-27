<?php
class DefaultController extends Controller {
	public function index() {
		echo Configuration::getURLPath();
		
		new DomainNames();
		new Core_Template("default", "default");
	}
}
?>