<?php
namespace helloworld\wrappers\controllers;

abstract class SiteWrapper extends \devmo\controllers\Controller {
	public function addWrapper ($content) {
		$view = $this->getView('helloworld.wrappers.views.SiteWrapper');
		$view->set('navigation',$this->runController('helloworld.wrappers.Navigation'));
		$view->set('content',$content);
		$view->set('poweredby',$this->runController('devmo.PoweredBy'));
		return $view;
	}
}
