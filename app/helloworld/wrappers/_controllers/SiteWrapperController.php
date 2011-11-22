<?php
namespace helloworld\wrappers\controllers;

abstract class SiteWrapperController extends \Devmo\controllers\Controller {
	public function addWrapper ($content) {
		$view = $this->getView('helloworld.wrappers.views.SiteWrapper');
		$view->setToken('content',$content);
		return $view;
	}
}