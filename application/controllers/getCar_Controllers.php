<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:49
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class getCar_Controllers extends CI_Controller{

    //构造函数：
    function getCar_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：w
          $this->load->model('getCar_Models');

    }

    public function index()
    {

      $this->load->view('shoppingCar');
    }
	function cuncar(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $str = $_POST['str'];
        $num = $_POST['num'];
        $tallprice = $_POST['tallprice'];
        $imgid = $_POST['imgid'];
        $shop = $this->getCar_Models->payforinsert($name,$price,$str,$num,$tallprice,$imgid);


    }
	

}