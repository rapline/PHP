<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initRoutes()
	{
		$this->bootstrap('frontController');
		$frontController = Zend_Controller_Front::getInstance();
//		$restRoute = new Zend_Rest_Route($frontController);
		$restRoute = new Zend_Rest_Route($frontController, array(), array('default'=>array('restsv')));
		$frontController->getRouter()->addRoute('rest', $restRoute);
	}
}

