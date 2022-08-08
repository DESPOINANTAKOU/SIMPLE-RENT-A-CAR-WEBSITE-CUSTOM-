<?php
   include("config.php");
   session_start();
   
   if(isset($_SESSION['login_user'])) {
      header("Location:home.php"); 
   }

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);      

      $sql = "SELECT id FROM `system_users` WHERE `username` = '$myusername' AND `password` = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
    //   var_dump($db);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo 'Welcome ' .($myusername);
        //  header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   echo '<script type="text/javascript">  alert(" Λυπούμαστε δεν είστε διαχειριστής της διαδικτυακής εφαρμογής"); location.href = "interface6.html"; </script>';    
?>  

