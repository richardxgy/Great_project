<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class home_Controllers extends CI_Controller{

    //构造函数：
    function home_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('home_Models');
    }

    public function index(){
        //调用getSinger()方法，获得的值放在名为$data的函数内：
        $data['erji01'] = $this->home_Models->geterji01();

        $data['erji02'] = $this->home_Models->geterji02();

        $data['erji03'] = $this->home_Models->geterji03();

        $data['erji04'] = $this->home_Models->geterji04();

        $data['erji05'] = $this->home_Models->geterji05();

        $data['erji06'] = $this->home_Models->geterji06();

        $data['erji07'] = $this->home_Models->geterji07();

        $data['erji08'] = $this->home_Models->geterji08();

        $this->load->view('home',$data);
    }


}