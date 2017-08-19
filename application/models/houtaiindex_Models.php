<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:52
 */
class houtaiindex_Models extends CI_Model {
    //构造函数--直接执行：
    function houtaiindex_Models() {
        //数据库对象连接数据库：
        $this -> load -> database();
    }
    public function selectData(){
		$sql='select * from navigation_form';
		$result=$this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		return $result->result_array();
	}
	public function updata($name,$id){
		$sql = 'update navigation_form set name = "'.$name.'" where id='.$id;
		$query = $this->db->query($sql);
        echo $query;
	}
	public function insert($name){
		$sql = 'insert into navigation_form(name)values("' .$name.'")';
		$query = $this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		echo $query;
	}
	public function show(){
		$sql='select * from listproduce';
		$result=$this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		return $result->result_array();
	}

}