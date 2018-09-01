

<?php
//first we have to import the database connection 

 require_once('database.php'); 
 session_start();
 if (isset($_POST['submit'])) 
 {
  
    $catagory = $_POST['catagory'];
    //echo $catagory;
    echo $catagory;
      if ($catagory=="faculty") 
      {
        header("location:faculty.php");
      }
      if ($catagory=="student") 
      {
        $id= $_POST['id'];
        $password = $_POST['password'];
        
          if (!empty($id && $password)) {
          //insert the sql quary 
          $sub_quary = "SELECT * FROM student WHERE s_id='$id' and password='$password'";

          //we create the quary string now time to exeute
          $sub_result = mysqli_query($conn,$sub_quary);
          if (!empty($sub_result)) {
          while($row = mysqli_fetch_array($sub_result)){
          $iddb = $row['s_id'];
          $passworddb = $row['password'];
          $branch = $row['branch'];
          //works fine
            if ($id==$iddb && $password==$passworddb && $branch=="science") {
              header("location:science.php");

          }
          //working ok
          else if ($name==$namedb && $password==$passworddb && $branch=="commerce") {
              
              header("location:commerce.php");
            }
            //working ok
           else if ($name==$namedb && $password==$passworddb && $branch=="arts") {
              
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




<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ----------



body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}


-->
</head>

  <style type="text/css">
   

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:40px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}


select#soflow-color {
   color: #fff;
   -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: white;
  
    color: #555;
   font-size: inherit;
   margin: 5px;
   overflow: hidden;
   padding: 3px 15px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 200px;
}

  </style>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <b><h2>University Login</h2></b>
   <p>Please enter your ID and password</p>
   </div>
       <form action="" method="POST">

        <div class="form-group">


            <input type="text" name="id" class="form-control" id="inputEmail" placeholder="Enter your ID">

        </div>

        <div class="form-group">

            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

        </div>
        <!--surround the select box within a "custom-select" DIV element.
Remember to set the width:-->
<div class="select">

<select name ="catagory" id="soflow-color" required="">
  <!-- This method is nice because it doesn't require e
  xtra div tags, but it also doesn't retain the style across all browsers. -->
  <option value="catagory">Choose Option</option>
  <option value="faculty">Faculty</option>
  <option value="student">student</option>
</select>
</div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


</body>
</html>


</body>
</html>