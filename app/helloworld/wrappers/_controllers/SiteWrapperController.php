<?php
namespace helloworld\wrappers\controllers;

abstract class SiteWrapperController extends \Devmo\Controller {
	public function addWrapper ($content) {
		$view = $this->getView('/helloworld/wrappers/SiteWrapper');
		$view->setToken('content',$content);
		return $view;
	}
}