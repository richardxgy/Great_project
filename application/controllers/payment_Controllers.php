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
        //添加名为:view的类库，将$data数据发送到news.php文件:
        $this->load->view('payment',$data);
    }
}