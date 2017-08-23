<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:53
 */
class getCar_Models extends CI_Model
{
    //构造函数--直接执行：
    function getCar_Models()
    {
        //数据库对象连接数据库：
        $this->load->database();

    }

	function payforinsert($name,$price,$str,$num,$tallprice,$imgid){
//		var_dump($_POST);
        //$id=$_POST['id'];
        $sql = 'INSERT INTO myshopcar(name,price,information,number,amount,image) VALUES ("'.$name.'","'.$price.'","'.$str.'","'.$num.'","'.$tallprice.'","'.$imgid.'")';
        $query = $this->db->query($sql);
        //$data['payforshop'] = $this->shopingcarModels->insert($name,$price,$str,$num);  // 注册信息添加，通过registerModels的insert方法
        //$this->load->view('payfor',$data);


    }
}