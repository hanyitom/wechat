<?php
namespace model;
use Cy\Mvc\Model\Model;

class user extends Model{
    public function __construct(){
        parent::__construct();
        $this->_table = 'admin_user';
    }
    public function login(){
        $username = 
        $this->_get('id')->where('username=""');
    }
}
