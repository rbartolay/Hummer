<?php
class DefaultController extends Controller {
	public function index() {
		
		var_dump($_SERVER);
		new Core_Template("default", "default");
	}
}
?>