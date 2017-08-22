<?php header('Access-Control-Allow-Origin: *'); ?>
	
<?php

/**撒大声地
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:48
 */
 defined('BASEPATH') OR exit('No direct script access allowed');

class particulars_Controllers extends CI_Controller{

    //构造函数：
    function particulars_Controllers(){
        //继承父类的方法，这里父类是框架定义好的：
        parent::__construct();
        //添加名叫helper的类库：
        $this->load->helper('url');
        //添加名叫model的类库：
          $this->load->model('particulars_Models');
    }
	
	public function index()
    {
         
	    $id= $this->uri->segment(4);
		$bm= $this->uri->segment(6);
		$data['id'] =$id;
		$data['bm'] =$bm;
//		var_dump($bm);
											;  
        $this->load->view('particulars',$data);
    }
	
	function getshopdata(){
	   
//	   var_dump($_GET['id']);
//	   $id= $this->uri->segment(4);
//       var_dump($id);
		$data = $this->particulars_Models->getxiangxi($_GET['id'],$_GET['bm']);
      
	     
//      $this->load->view('particulars',$data);
         
//    var_dump($data);
        echo json_encode($data);
		
		
	}
		
    
}