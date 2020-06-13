<?php
class App{

    protected $controller="Home";
    protected $action="Trangchu";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
 
        // Controller
        if( file_exists("./mvc/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            //hủy khi chạy param
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            //hủy khi chạy param
            unset($arr[1]);
        }
 
        // Params '?': nếu array tồn tại gáng ($arr) ':':ngược lại cho arr = rỗng
        $this->params = $arr?array_values($arr):[];

        //tạo biến controller và có hàm là action
        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    //xử lý đưa url về mảng
    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>