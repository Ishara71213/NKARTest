<?php

if(isset($_GET['action'])){
    $request=$_GET['action'];

    if($request=='signup'){$route="SignUpController@indexAction";}
    if($request=='login'){$route="LoginController@indexAction";}
}