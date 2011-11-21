<?php
class HomeController extends DatabaseDao {
	public function run () {
		
		return $this->runController('/SiteWrapper',array('body'=>$this->getView()));
	}
}