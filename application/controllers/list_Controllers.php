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
    public function index(){
        header("Access-Control-Allow-Origin: *");
        if($this->uri->segment(4)){
        	$biaoname= $this->uri->segment(4);
        	$fenleiname=$this->uri->segment(6);
        }else{
        	$biaoname="listproduce";
        	$fenleiname='food';
        }
        //这里要在home页面传递一个参数来判断到底遍历哪些数据
        //$_GET['表名'],例如 listproduce
        $data['lists'] = $this->list_Models->selectpaixu($biaoname,'id','true');
        $data['leibies'] = $this->list_Models->selectleibie($fenleiname);
        $data['biaoname'] = $biaoname;
        $data['fenleiname']=$fenleiname;
        $this->load->view('list',$data);
    }
    	/*筛选*/
	public function choose(){
		header("Access-Control-Allow-Origin: *");
		$data['chooselist'] = $this->list_Models->choose($_GET['biaoname'],$_GET['fenleiname'],$_GET['id']);
		/*json格式字符串*/
		echo json_encode($data);
	} 
    /*排序*/
	public function sort(){
		header("Access-Control-Allow-Origin: *");
		$data['lists'] = $this->list_Models->selectpaixu($_GET['biaoname'],$_GET['sortby'],$_GET['sortboolen']);
		/*json格式字符串*/
		echo json_encode($data);
	}
}