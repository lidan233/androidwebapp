<?php
    class mysql1{
        private $host;
        private $root;
        private $pwd ;
        private $database ;
        private $conn ;
        
        
         public  function __construct($host,$root,$pwd,$database)
        {
            $this->host = $host ;
            $this->root = $root ;
            $this->pwd = $pwd ;
            $this->database = $database ;

            $this->connect() ;
        }
        
        function connect()
        {
    //        $db = new mysqli($host,$root,$pwd,$database,$conn) ;
            $this->conn = mysql_connect($this->host,$this->root,$this->pwd) ;
            mysql_select_db($this->database,$this->conn) ;
            mysql_query("set names utf-8") ;

            if($this->conn)
            {
                echo "succe" ;
            }else
            {
                echo "shibai" ;
            }
        }
        function query($sql)
        {
            return mysql_query($sql) ;
        }
        function array_ay($result)
        {
            return mysql_fetch_array($result) ;
        }
        
        function rows($result)
        {
            return mysql_num_rows($result) ;
        }

        function db_close()
        {
            return mysql_close($this->conn) ;
        }
        function select($biao,$where)
        {
            echo "select * from $biao where $where" ;
            return $this->query("select * from $biao where $where") ;

        }
        
        function insert($biao,$ziduan,$zhi)
        {
            echo "Insert into User.".$biao." "."(".$ziduan.")"."values(".$zhi.")" ;
            return  $this->query("Insert into User.".$biao." "."(".$ziduan.")"."values(".$zhi.")") ;

        }
        function del($title,$where)
        {
            echo "delete from `$title` where $where" ;
            return $this->query("delete from `$title` where $where");

        }

        function update($title,$property,$where)
        {
            echo "update `User`.`$title` set $property where `$title`.`id`=".$where ;
            return $this->query("update `User`.`$title` set $property where `$title`.`id`=".$where);

        }

        function up_date($title,$property,$where)
        {
            echo "update User.".$title."set ".$property." where".$where ;
            return $this->query("update User.".$title."set ".$property." where".$where) ;
        }

    
    }
    $db = new mysql1('localhost','root','Ly19990904','User') ;

?>
