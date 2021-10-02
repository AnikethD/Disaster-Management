<?php
 $con = mysqli_connect("localhost","root","","test");
 if (!$con) die("Error: " . mysqli_connect_error());
 if(isset($_POST['uname'])){
    $uname=$_POST['uname'];
    }
    else
    $uname="name not set";
 if(isset($_POST['pwd'])){
        $pwd=$_POST['pwd'];
        }
        else
$pwd="pwd not set";
// $uname= $_POST["uname"]; $pwd=$_POST["pwd"];
 $sql = "select * from registration where username ='$uname' and password='$pwd'";
// $result = $con‐>query($sql); 
 $result=mysqli_query($con,$sql);
 if (!$result)
  die("Error in sql query");
 if(mysqli_fetch_assoc($result))
 {
 header("Location: http://localhost/A/index.html");
 }
 else 
 {
 header("Location: http://localhost/dashboard");
 }
 $con‐>close();
 ?>