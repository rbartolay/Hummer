<?php
class DefaultController extends Controller {
	public function index() {
		new DomainNames();
		var_dump(parse_url("http://" . $_SERVER['HTTP_HOST']));
		new Core_Template("default", "default");
	}
}
?>