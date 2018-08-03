
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

    
    $name = $_POST['name'] ;
    $account = $_POST['account'] ;
    $passwd = $_POST['passwd'] ;


    if(!$name||!$account||!$passwd)
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
    if(isnull($query1))
    {
        $query1 = "insert into user1 values('".$name."','".$account."','".$passwd."')" ;
        $db->query($query1) ;
    }else{
        echo "your account is existed" ;
    }

    

?>

