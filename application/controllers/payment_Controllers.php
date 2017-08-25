<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:50
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class payment_Controllers extends CI_Controller
{


    //构造函数：
    function payment_Controllers()
    {
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('payment_Models');

    }

//    接收数据
    function get_data()
    {
        header('Access-Control-Allow-oRigin:*');
        $select = $_POST['select'];
        $data['shop'] = $this->payment_Models->sel_data($select);
        $index=sizeof($data['shop']);
        //计算金额
        $data['tatol'] = 0;
        foreach ($data['shop'] as $item) {
            $data['tatol'] += $item['amount'];
        }
//        调用方法，查询地址信息
        $adddress_list=$this->select_address();
        $data['address_list']=$adddress_list;
        if($index!=0){
        $this->load->view('payment', $data);
        }
    }

//    接收地址信息
    function get_address()
    {
        header('Access-Control-Allow-oRigin:*');
        $user_name = $this->user_name = $this->input->get_post('user_name');
        $user_phone = $this->user_phone = $this->input->get_post('user_phone');
        $provinces = $this->provinces = $this->input->get_post('provinces');
        $city = $this->city = $this->input->get_post('city');
        $county = $this->county = $this->input->get_post('county');
        $user_intro = $this->user_intro = $this->input->get_post('user_intro');
        $data['shop1'] = $this->payment_Models->insertdata($user_name, $user_phone, $provinces, $city, $county, $user_intro);
    }
//    查询地址
function select_address(){
    $data['shop2'] = $this->payment_Models->select_data();
    return $data['shop2'];
}

}