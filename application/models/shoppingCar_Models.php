<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:53
 */
class shoppingCar_Models extends CI_Model
{
    //构造函数--直接执行：
    function shoppingCar_Models()
    {
        //数据库对象连接数据库：
        $this->load->database();

    }

//    查询
    function getShopingcardata()
    {
        // 查询数据库，获得的值用变量$query接收：
        $query = $this->db->query('SELECT * from myshopcar');
        // 将接收的数据以数组形式返回：
        return $query->result_array();
    }
	function payforinsert($name,$price,$str,$num,$tallprice,$imgid){
//		var_dump($_POST);
        //$id=$_POST['id'];
        $sql = 'INSERT INTO myshopcar(name,price,information,number,amount,image) VALUES ("'.$name.'","'.$price.'","'.$str.'","'.$num.'","'.$tallprice.'","'.$imgid.'")';
        $query = $this->db->query($sql);
        //$data['payforshop'] = $this->shopingcarModels->insert($name,$price,$str,$num);  // 注册信息添加，通过registerModels的insert方法
        //$this->load->view('payfor',$data);


    }

//    修改
    function updata($id,$num,$amount)
    {
        $sql=$sql = 'UPDATE myshopcar SET number=' . $num . ',amount='. $amount . ' WHERE id=' . $id;
        $query = $this->db->query( $sql);
        // 将接收的数据以数组形式返回：
        return $query;
    }
//    修改bol
    function updatabol($id,$bol)
    {
        $sql=$sql = 'UPDATE myshopcar SET bol=' . $bol .' WHERE id=' . $id;
        $query = $this->db->query( $sql);
        // 将接收的数据以数组形式返回：
        return $query;
    }
//    删除
    function deldata($id)
    {
        $sql=$sql = 'DELETE FROM myshopcar WHERE id='.$id;
        $query = $this->db->query( $sql);
        // 将接收的数据以数组形式返回
        return $query;
    }
}