
      <?php
      require_once("db.php");
    
      if(!(isset($_POST['name']))&&(isset($_POST['age']))&&(isset($_POST['gender']))){
        die("Error");
      }

      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender']; 
      
     
  $sql = "INSERT INTO employee(name,`age`,Gender_id) values ('$name',$age,$gender);";
   
       $result = mysqli_query($db_conn,$sql);
       echo($result);
      
      ?>
                    
