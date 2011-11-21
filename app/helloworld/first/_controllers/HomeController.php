<?php
namespace helloworld\first\controllers;

class HomeController extends \helloworld\wrappers\controllers\SiteWrapperController {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}