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



$load_new=new SignUpController();
$index=$load_new->indexAction();