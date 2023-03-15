<?php

class ErrorPageController{
    public function indexAction(){
        $this->routeManager();
    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/404.php');        
    }
}