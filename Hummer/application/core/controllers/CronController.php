<?php
class CronController extends Controller {
	public function executeIndeed() {
		
		$indeed = new APIIndeed();		
		
		$iBom = new IndeedBom();
		$iBom->insertRecords($indeed->getResults());
	}
}