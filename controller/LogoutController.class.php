<?php

class LogoutController{
    public function indexAction(){
        session_destroy();
        header("location:./index.php?action=signup");
    }

}