<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:50
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class login_Controllers extends CI_Controller{

    //构造函数：
    function login_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('login_Models');
        $this->load->library('session');
    }
    public function index(){
    	$this->load->view('login');
    }
    public function login() {
    	header("Access-Control-Allow-Origin: *");
		//接受数据
		$name = $_POST['name'];
		$md5passwd = md5($_POST['passwd']);
//      //接受返回的数据  
		 $data['user'] = $this->login_Models->selectData($name);
//		 var_dump($data);
		//当前值加密
//	 	 $passmd = md5($passwd);
        //提取数据库
	     $passvalue = $data['user'][0]['passwd'];
	     $nameId = $data['user'][0]['id'];
		//判断密码是否相等
		 if($md5passwd==$passvalue){
//	 	 $newdata = array(
//	 	                   'id' => $nameId,
//                         'name'  => $name
//                     );
//		$this->session->set_userdata($newdata);		   
		 	echo "1";
		//将键值付给name变量	 
//		$name = $this->session->userdata('username');
		 }else{
		 	echo "2";
		 }

	}


}