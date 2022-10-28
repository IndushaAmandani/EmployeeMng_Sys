
      <?php  
        require_once("db.php");
        $sql = "Select id,name,`age`, (SELECT name from gender where id = Gender_id) as gender FROM employee";
        $result = mysqli_query($db_conn,$sql);
  
        $employees = array();
                    while($employee = mysqli_fetch_assoc($result)){
                array_push($employees,$employee) ;

                    }
                    $json = json_encode($employees);
                echo $json;
                ?>
                    

          