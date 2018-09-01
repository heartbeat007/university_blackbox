<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
//first we have to import the database connection 
 require_once('database.php'); 
 session_start();
 if (isset($_POST['submit'])) 
 {
  echo "string";
    $catagory = $_POST['catagory'];
    //echo $catagory;
    echo $catagory;
      if ($catagory=="faculty") 
      {
        header("location:faculty.php");
      }
      if ($catagory!="student") 
      {
        $id= $_POST['id'];
        $password = $_POST['password'];
        
          if (!empty($id && $password)) {
          //insert the sql quary 
          $sub_quary1 = "SELECT * FROM student WHERE s_id='$id' and password='$password'";

          //we create the quary string now time to exeute
          $sub_result = mysqli_query($conn,$sub_quary);
          if (!empty($sub_result)) {
          while($row = mysqli_fetch_array($sub_result)){
          $iddb = $row['s_id'];
          $passworddb = $row['password'];
          $branch = $row['branch'];
          //works fine
            if ($id==$iddb && $password==$passworddb && $branch=="science") {
              header("location:science_routine.php");

          }
          //working ok
          else if ($name==$namedb && $password==$passworddb && $branch=="commerce") {
              
              header("location:commerce.php");
            }
            //working ok
           else if ($name==$namedb && $password==$passworddb && $catagory=="arts") {
              
              header("location:arts.php");
          }
            //working ok
          else{
            header("location:failed.php");  
          }
          
}
                    }

                          }
      }
    }

    
?>










</body>
</html>