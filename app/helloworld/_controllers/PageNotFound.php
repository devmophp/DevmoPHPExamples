<?php
namespace helloworld\controllers;

class PageNotFound extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}