<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:52
 */
class list_Models extends CI_Model {
    //构造函数--直接执行：
    function list_Models() {
        //数据库对象连接数据库：
        $this -> load -> database();
    }
    
    function selectdata() {
    	$sql='select * from  listproduce';
		$result=$this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		return $result->result_array();
    }

}