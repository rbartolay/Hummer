<?php
class DefaultController extends Controller {
	public function index() {		
		new Core_Template("default", "default");
	}
}
?>