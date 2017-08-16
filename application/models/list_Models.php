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

    //参数为表名
    function selectdata($name) {
    	$biao = $name;
    	$sql='select * from '.$name;
		$result=$this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		return $result->result_array();
    }
    function selectleibie($name,$sortby,$boolen) {
    	$sql='select * from '.$name;
		$result=$this->db->query($sql);
		header("Access-Control-Allow-Origin: *");
		$list = $result->result_array();
		$length = count($list);
		if($boolen=='true'){
			for($i = 0;$i<$length-1;$i++){
				for($j=0;$j<$length-1-$i;$j++){
					if($list[$j][$sortby]>$list[$j+1][$sortby]){
						$kk=$list[$j+1];
						$list[$j+1]=$list[$j];
						$list[$j]=$kk;
					}
				}
			}
		}else{
			for($i = 0;$i<$length-1;$i++){
				for($j=0;$j<$length-1-$i;$j++){
					if($list[$j][$sortby]<$list[$j+1][$sortby]){
						$kk=$list[$j+1];
						$list[$j+1]=$list[$j];
						$list[$j]=$kk;
					}
				}
			}
		}
		return $list;
    }

}