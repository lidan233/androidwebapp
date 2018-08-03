
<?php
    
    function isnull($query)
    {
        global $db ;
        $result = $db->query($query) ;
        echo "fcuk3";
        $num = $result->num_rows ;
        if(num==0)
        {
            return true ;
        }else{
            return false ;
        }
    }

    $account = $_POST['account'] ;
    $passwd = $_POST['passwd'] ;


    if(!$account||!$passwd)
    {
        echo "You suck(cheat me) .and You are not a good boy ." ;
        exit ;
    }


  

    if(mysqli_connect_errno())
    {
        echo "Error :Could not connect to database.Please try again later" ;
        exit ;
    }


    $query1 = "select * from user1 where account='".$account."'" ;
    if(!isnull($query1))
    {
        $result = $db->query($query1) ;
        $result_row = mysql_fetch_object($result) ;
        if($result_row->account==$account&&$result_row->passwd==$passwd)
        {
            require_once "app_view.php" ; 
        }else{
            echo "your password is not true" ;
        }
    }else{
        echo "your account is not existed" ;
    }

    

?>

