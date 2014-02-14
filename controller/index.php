<?php
namespace controller;
use Cy\Mvc\Controller\Controller;

class index extends Controller{
    public function index(){
        if(!$_SESSION['isLogin'])
            $this->jump('danger','You had not logined! Please try again after login!','/user/login');
        $this->display('index.php');
    }
}
