<?php
    
   
    require_once("db.php");
    if(!isset($_GET['id'])){
        die("error");
    }
    $id = $_GET['id'];
    $sql = "Delete from employee where id =".$id ;
    mysqli_query($db_conn,$sql);

   
                

      




?>