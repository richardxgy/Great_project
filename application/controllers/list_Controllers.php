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
//    public function index(){
//        //这里要在home页面传递一个参数来判断到底遍历哪些数据
//        //$_GET['表名'],例如 listproduce
//        $data['lists'] = $this->list_Models->selectpaixu('listproduce','id','true');
////      $data['leibies'] = $this->list_Models->selectleibie('leibie');
//        $this->load->view('list',$data);
//    }
//    /*排序*/
//	public function sort(){
//		header("Access-Control-Allow-Origin: *");
//		$data['lists'] = $this->list_Models->selectpaixu('listproduce',$_GET['sortby'],$_GET['sortboolen']);
//		$this->load->view('list',$data);
//
//	}
	/*筛选*/
	
}