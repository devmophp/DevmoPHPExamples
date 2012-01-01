<?php
namespace helloworld\first\controllers;

class PersonController extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}