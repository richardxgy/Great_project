<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:54
 */
class registration_Models extends CI_Model {
    //构造函数--直接执行：
    function registration_Models() {
        //数据库对象连接数据库：
        $this -> load -> database();
    }
    function insertData($name,$passwd){
    	$sql = 'insert into  user(name,passwd)values("'.$name.'","'.$passwd.'")';
        $result = $this->db->query($sql);
        return $result;
    }

}