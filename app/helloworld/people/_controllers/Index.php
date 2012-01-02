<?php
namespace helloworld\people\controllers;
class Index extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		//init data
		$dao = $this->getDao('person');
		$utility = $this->getLibrary('common.utility');
		// setup view
		$view = $this->getView();
		$view->people = $dao->getAll();
		$view->date = $utility->getDate();
		return $this->addWrapper($view);
	}
}