<?php
class PrefecturesController extends AppController
{
    /** 使用するモデルを指定 */
 
    /** 自動レンタリング無効 */
    public $autoLayout = false;
    
    public function index()
    {
		$name = 'Prefectures';
 		$uses = array('Prefecture');
	    
	    $offset = $this->params['url']['offset'];
	    
		$this->set('output', $this->Prefecture->find('all', array(
			'offset' => $offset,
			'limit' => 10,
			'order' => array('Prefecture.id')
			)));
//All(null, null, 'Prefecture.created ASC'));

   }
   
   public function lists()
   {
   }
}