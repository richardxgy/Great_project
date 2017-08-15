<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:48
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class list_Controllers extends CI_Controller{

    //构造函数：
    function list_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('list_Models');
    }


}