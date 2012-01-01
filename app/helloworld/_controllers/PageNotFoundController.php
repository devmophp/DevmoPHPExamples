<?php
namespace helloworld\controllers;

class PageNotFoundController extends \helloworld\wrappers\controllers\SiteWrapperController {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}
