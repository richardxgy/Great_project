<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 18:52
 */
class home_Models extends CI_Model {
    //构造函数--直接执行：
    function home_Models() {
        //数据库对象连接数据库：
        $this -> load -> database();
    }

}