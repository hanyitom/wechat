<?php
namespace model;
use Cy\Mvc\Model\Model;
class account extends Model{
    public function create(){
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];
    }
    public function disable(){
        $flag = $_POST['disable'];
    }
    public function del(){
        $uid = $_POST['uid'];
    }
    public function login(){
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];
    }
    public function logout(){
        
    }
}
