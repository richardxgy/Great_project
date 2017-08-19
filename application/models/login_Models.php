<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:53
 */

class login_Models extends CI_Model {
    //构造函数--直接执行：
    function login_Models() {
        //数据库对象连接数据库：
        $this -> load -> database();
    }
    function selectData($name) {
    	header("Access-Control-Allow-Origin: *");
		 $sql = 'SELECT id,passwd FROM user WHERE name = "'.$name.'"';
		 //查询数据库
		 $query = $this->db->query($sql);
		 //以数组的形式返回查询结果
		 return $query->result_array();
	    
	}

}