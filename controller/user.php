<?php
namespace controller;

use Cy\Mvc\Controller\Controller;

class user extends Controller{
    private $operation = array('login','logout','create','del','disable','enable');
    public function __call($func){
        if(in_array($func);
        $msg = $this->getModel('accout')->$func();
        $this->jump($msg['type'],$msg['msg'], $msg['url']);
    }
}
