<?php

class DashBoardController extends DashBoardModel{

    public function indexAction(){
        $this->routeManager();
    }
    
    public function routeManager(){
        return require_once(__DIR__.'/../view/Dashboard.php');        
    }
    
}