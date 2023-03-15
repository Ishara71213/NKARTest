<?php 
 

include_once(__DIR__.'/connection/Dbh.class.php');  
 

spl_autoload_register(function($class){
    if(file_exists(__DIR__.'/controller/'.$class.'.class.php')){
        require __DIR__.'/controller/'.$class.'.class.php';
    }
    if(file_exists(__DIR__.'/model/'.$class.'.class.php')){
        require __DIR__.'/model/'.$class.'.class.php';
    }
    if(file_exists(__DIR__.'/view/'.$class.'.php')){
        require __DIR__.'/view/'.$class.'.php';
    }
});

print_r($_POST);    
include_once(__DIR__."/routes/route.php");


if(!empty($route)){
    $routes=explode('@',$route);
    $controller=$routes[0];
    $action=$routes[1];
}else{
    // header("location:./index.php?action=signup");
    $controller='SignUpController';
    $action='indexAction';
    // $controller='LoginController';
    // $action='indexAction';
}

// $load_new=new SignUpController();
$load_new=new $controller();
$index=$load_new->$action();

   