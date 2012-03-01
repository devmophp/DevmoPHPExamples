<?php
namespace helloworld\jobs\controllers;

class Index extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		//init data
		$dao = $this->get('.daos.Job');
		$utility = $this->get('common.libs.utility');
		// setup view
		$view = $this->getView();
		$view->jobs = $dao->getAll();
		$view->date = $utility->getDate();
		return $this->addWrapper($view);
	}
}
