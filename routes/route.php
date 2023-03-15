<?php


if(isset($_GET['action'])){
    $request=$_GET['action'];

    if(!isset($_SESSION['email'])){
        if($request=='signup'){$route="SignUpController@indexAction";}
        if($request=='login'){$route="LoginController@indexAction";}
    }
    if(isset($_SESSION['email'])){
        if($request=='dashboard'){$route="DashBoardController@indexAction";}
        if($request=='logout'){$route="LogoutController@indexAction";}
    }
    

   
}