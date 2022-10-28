<?php
//class CommonDao{
   // public function getConnection(){
        $serverName = "localhost";
        $userName = "root";
        $password = "1234";
        $database = "earth1";

        $db_conn = mysqli_connect($serverName,$userName,$password,$database);

        if(!$db_conn){
            die("Conection Failed:" );//$db_conn -> connection_error
        
        }
      
      
      

    


