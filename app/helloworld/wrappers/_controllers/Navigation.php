<?php
namespace helloworld\wrappers\controllers;
class Navigation extends \Devmo\controllers\Controller {
	public function run () {
		return $this->getView('helloworld.wrappers.views.Navigation');
	}
}
