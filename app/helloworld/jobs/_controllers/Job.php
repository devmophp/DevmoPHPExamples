<?php
namespace helloworld\jobs\controllers;

class Job extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView());
	}
}
