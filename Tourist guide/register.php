<?php
     header('location:login.html');
     $con= new mysqli("localhost","root","","tourist");

     if(!$con)
     {
         die("not connected".mysqli_error());
     }
     else
     {
         if(isset($_POST['register']))
         {
             $name = mysqli_real_escape_string($con,$_POST['username']);
             $email = mysqli_real_escape_string($con,$_POST['email']);
             $pass = mysqli_real_escape_string($con,$_POST['password']);
             $s = "select * from reg where uname ='$name' ";
             $result = mysqli_query($con,$s);
             $num=mysqli_num_rows($result);
             if($num == 1)
             {
                 
                 function function_alert($message)
                  { 
                     echo "<script>alert('$message');</script>"; 
                  } 
                    
                 function_alert("Username already exist"); 

             }
             else{
                 $reg= "INSERT INTO reg (uname,email,pass) VALUES('$name','$email','$pass')";
                 mysqli_query($con,$reg);
                 
                 function function_alert($message)
                  { 
                     echo "<script>alert('$message');</script>"; 
                  } 
                    
                 function_alert("Registration Success :)");
             }
             mysqli_close($con); 
        }
     }