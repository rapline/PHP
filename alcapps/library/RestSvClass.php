<?php

require_once 'Zend/Json.php';
require_once 'Zend/Db/Adapter/Pdo/Mysql.php';

class RestSvClass
{
    public function hello($offset, $limit)
    {
		// データベース接続に必要な情報を配列に格納します
		$db_info = array('host'     => 'localhost',
		                 'username' => 'AlcUser',
		                 'password' => 'AlcUser',
		                 'dbname'   => 'Alc',
		                 'charset'	=>	'utf8' );
		// MySQL用アダプタのオブジェクトを作ります
		$db = new Zend_Db_Adapter_Pdo_Mysql($db_info);

		// SELECT文の文字列を作ります
		$sql = "SELECT * FROM M_PREFECTURE ORDER BY PREF_NUM LIMIT ".$offset.",".$limit;
		// SELECT文を実行します
		$result = $db->fetchAll($sql);
		// 配列で返される結果を表示します
		
		$stack = array();

		foreach ($result as $row) {
			$data = array('pref_num' => $row['PREF_NUM'], 'pref_kj_name' => $row['PREF_KJ_NAME']);
			array_push($stack, $data);
		}
		    		
//		return Zend_Json::fromxml($stack);
		return Zend_Json::encode($stack);
    }
    public function goodbye($xml)
    {
    }
}

?>
