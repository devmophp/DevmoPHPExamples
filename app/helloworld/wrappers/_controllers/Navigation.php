<?php
namespace helloworld\wrappers\controllers;
class Navigation extends \devmo\controllers\Controller {
	public function run () {
		return $this->getView('helloworld.wrappers.views.Navigation');
	}
}
