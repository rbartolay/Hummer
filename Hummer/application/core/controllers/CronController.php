<?php
class CronController extends Controller {
	
	public function executeIndeed() {
		$indeed = new APIIndeed();
		$iBom = new IndeedBom();
		$iBom->insertRecords($indeed->getResults());
	}
	
	public function executeCareerjet() {
		$cj = new APICareerjet();
		$cjBom = new CareerjetBom();
		$cjBom->insertRecords($cj->search(array('location'=>'london' ,'sort'=>'date', 'pagesize' => 50)));
	}
}