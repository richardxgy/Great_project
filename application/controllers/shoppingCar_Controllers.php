<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:49
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class shoppingCar_Controllers extends CI_Controller
{
    //构造函数：
    function shoppingCar_Controllers()
    {
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('shoppingCar_Models');
    }

    public function index()
    {
//调用getSinger()方法，获得的值放在名为$data的函数内：
        $data['shop'] = $this->shoppingCar_Models->getShopingcardata();
        $this->load->view('shoppingCar',$data);
    }
//
    function getAjaxData(){
        header('Access-Control-Allow-oRigin:*');
        //1，从url地址里面取出参数  test

        $this->id = $this->input->get_post('goods_id');
        $this->num = $this->input->get_post('goods_number');
        $this->amount = $this->input->get_post('goods_amount');
        $id= $this->id;
        $num=$this->num;
        $amount=$this->amount;
        $data['shop1'] = $this->shoppingCar_Models->updata($id,$num,$amount);
        //添加名为:view的类库，将$data数据发送到news.php文件:
    }

//    删除数据
    function deleteData(){
        header('Access-Control-Allow-oRigin:*');
        //1，从url地址里面取出参数  test
        $this->id = $this->input->get_post('goods_id');
        $id= $this->id;
        $data['shop2'] = $this->shoppingCar_Models->deldata($id);
        //添加名为:view的类库，将$data数据发送到news.php文件:
    }
//    改变选中状态值
function updataboolean(){
    header('Access-Control-Allow-oRigin:*');
    $this->id = $this->input->get_post('goods_id');
    $this->bol = $this->input->get_post('goods_bol');
    $id= $this->id;
    $bol= $this->bol;
    $data['shop1'] = $this->shoppingCar_Models->updatabol($id,$bol);
}
}