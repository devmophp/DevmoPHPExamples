<?php
namespace helloworld\wrappers\controllers;
class Navigation extends \devmo\controllers\Controller {
	public function run () {
		$view = $this->getView('helloworld.wrappers.views.Navigation');
		$view->page = strtolower($this->getRequestController());
		return $view;
	}
}
