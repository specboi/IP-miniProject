<?php
     session_start();
     $con= new mysqli("localhost","root","","tourist");
     mysqli_select_db($con,'tourist');
     $name = mysqli_real_escape_string($con,$_POST['username']);
     $pass = mysqli_real_escape_string($con,$_POST['password']);
     $s = "select * from reg where uname ='$name' && pass='$pass' ";
     $result = mysqli_query($con,$s);
     $num=mysqli_num_rows($result);
     if($num == 1)
     {  
         $_SESSION['username']=$name;
         header('location:index1.php'); 
     }
     else{
                function function_alert($message)
                { 
                   echo "<script>alert('$message');</script>"; 
                } 
                  
                function_alert("Invalid Password"); 
                header('location:login.html');
             }
             mysqli_close($con); 
?>
     