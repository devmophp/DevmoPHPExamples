<?php
namespace helloworld\people\controllers;
class Index extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		//init data
		$dao = $this->getDao('person');
		// setup view
		$view = $this->getView();
		$view->people = $dao->getAll();
		return $this->addWrapper($view);
	}
}