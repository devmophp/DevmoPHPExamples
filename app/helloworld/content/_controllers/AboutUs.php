<?php
namespace helloworld\content\controllers;

class AboutUs extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}
