<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:53
 */
class payment_Models extends CI_Model
{
    //构造函数--直接执行：
    function payment_Models()
    {
        //数据库对象连接数据库：
        $this->load->database();
    }

    function sel_data($sele)
    {
        $data = array();
        $index = 0;
        foreach($sele as $item){
            // 查询数据库，获得的值用变量$query接收：
            $query = $this->db->query('SELECT * from myshopcar WHERE id=' . $item);
            // 将接收的数据以数组形式返回：
            $buffer = $query->result_array();
            $data[$index]=$buffer[0];
            $index++;
        }
        return $data;
    }
}