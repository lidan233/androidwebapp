
<?php
    require("conmysql.php") ;
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

    echo "fuck" ;
    $name = $_POST['name'] ;
    $ip = $_SERVER['REMOTE_ADDR'] ;
    $tele = $_POST['tel'] ;
    $hostname1 = $_SERVER['REMOTE_HOST'];

    if(!$name||!$ip||!$tele)
    {
        echo "$hostname1,$tele,$ip,$name";
        echo "You suck(cheat me) .and You are not a good boy ." ;
        exit ;
    }


  

    if(mysqli_connect_errno())
    {
        echo "Error :Could not connect to database.Please try again later" ;
        exit ;
    }


    $query1 = "select * from user where ip='".$ip."'" ;
    if(isnull($query1))
    {
        echo "you scuk" ;
    }else{
        echo "you second" ;
    }
    // $result1 = $db->query($query1) ;
    // $num = $result1->num_rows ;
    // if($num>=1)
    // {
    //     echo "go away" ;
    //     exit ;
    // }

    //$query = "insert into user values('".$ip."','".$name."','".$tele."','".$hostname1."')" ;
    // $result = $db->query($query) ;

    // if($result)
    // {
    //     echo "you have submit  successfully" ;
    // }else{
        
    //     echo "submit failed .please try again later " ;
    // }

    // $result->free() ;
    // $db->close() ;

    
    

?>

