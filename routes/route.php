<?php

// if(isset($_GET['action'])){
//     $request=$_GET['action'];

//     if($request=='signup'){$route="SignUpController@indexAction";}
//     if($request=='login'){$route="LoginController@indexAction";}
// } 

$parts=explode("/",$_SERVER["REQUEST_URI"]);

if($parts[1]="api"){
    print_r($parts[1]);
}