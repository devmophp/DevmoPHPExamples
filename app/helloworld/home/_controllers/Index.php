<?php
namespace helloworld\home\controllers;

class Index extends \helloworld\wrappers\controllers\SiteWrapper {
	public function run () {
		return $this->addWrapper($this->getView(null,array('navigation'=>$this->runController('helloworld.wrappers.Navigation'))));
	}
}
