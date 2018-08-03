<?php

    $nouce = "" ;
    session_start() ;
    if($nouce="")
    {
        $nouce = base64_encode(uniqid(NULL,true)) ;
        $_SESSION['nouce'] = $nouce ;
    }
    if($_GET['status'])
    {
        switch($_GET['status'])
        {
            case 1:
            $title = "register" ;
            include "input_header.php" ;
            include "register.php" ;
            require "input_footer.php" ;
            $_SESSION['register'] = $nouce  ;
            break ;
            case 2:
            $title = "login" ;
            include "input_header.php" ;
            include "login.php" ;
            require "input_footer.php" ;
            $_SESSION['login'] = $nouce;
            break ;
            
        }

    }else
    {
        if($nouce!=""&&$Session['login']==$nouce&& $_POST['nouce'] == $nouce)
        {
            require_once "conmysql.php" ;
            require_once "login_mysql.php" ;

        }else if($nouce!=""&&$Session['register']==$nouce&& $_POST['nouce'] == $nouce)
        {
            require_once "conmysql.php" ;
            require_once "register_mysql.php" ;
        }else{
            echo "fcuk you" ;
        }
    }
  


?>