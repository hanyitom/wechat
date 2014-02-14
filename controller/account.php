<?php
namespace controller;

use Cy\Mvc\Controller\Controller;

class account extends Controller{
    private $operation = array();
    public function __call($func){
        if(in_array($func);
        $msg = $this->getModel('accout')->$func();
        $this->jump($msg['msg'], $msg['url']);
    }
}
