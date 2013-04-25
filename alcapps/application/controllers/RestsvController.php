<?php

require_once 'RestSvClass.php';

class RestsvController extends Zend_Rest_Controller
{
	public function init()
	{
//		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender(true);
	}
	public function headAction()
	{
	}
	public function indexAction()
	{
	}
	public function getAction()
	{
		try{
			$server = new Zend_Rest_Server();
			$server->setClass('RestSvClass');
/*
		if ('GET' == $_SERVER['REQUEST_METHOD']) {
		    $server->setTarget('RestSvClass.php')
		           ->setEnvelope(Zend_Json_Server_Smd::ENV_JSONRPC_2);
		    $smd = $server->getServiceMap();
		 
		    // Set Dojo compatibility:
		    $smd->setDojoCompatible(true);
		 
		    header('Content-Type: application/json');
		    echo $smd;
		    return;
		}
*/
			$server->handle();
			
		} catch (Exception $e) {
			echo "例外キャッチ：", $e->getMessage(), "\n";
			
		}
	}
	public function postAction()
	{
//		$server = new Zend_Rest_Server();
//		$server->setClass('RestSvClass');

//		$val = $server->handle();
	}
	public function deleteAction()
	{
	}
	public function putAction()
	{
	}
}
