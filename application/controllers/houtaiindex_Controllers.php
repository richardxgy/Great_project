<?php
/**
 * 
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class houtaiindex_Controllers extends CI_Controller{

    //构造函数：
    function houtaiindex_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
        $this->load->model('houtaiindex_Models');
    }
    
    public function index(){
        $data['navigations'] = $this->houtaiindex_Models->selectData();
        $data['shows']=$this->houtaiindex_Models->show();
        $this->load->view('houtaiindex',$data);
    }
    
    public function updata(){
    	$this->houtaiindex_Models->updata($_GET['name'],$_GET['id']);
    	header("Access-Control-Allow-Origin: *");
    }
    
	public function insert(){
		$this->houtaiindex_Models->insert($_GET['name']);
		header("Access-Control-Allow-Origin: *");
	}
	public function show(){
		$data['shows']=$this->houtaiindex_Models->show();
		header("Access-Control-Allow-Origin: *");
		echo json_encode($data);
	}

}