<?php
namespace helloworld\content\controllers;

class Press extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}
