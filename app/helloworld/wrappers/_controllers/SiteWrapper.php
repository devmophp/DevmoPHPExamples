<?php
namespace helloworld\wrappers\controllers;

abstract class SiteWrapper extends \devmo\controllers\Controller {
	public function addWrapper ($content) {
		$view = $this->getView('helloworld.wrappers.views.SiteWrapper');
		$view->setToken('content',$content);
		return $view;
	}
}