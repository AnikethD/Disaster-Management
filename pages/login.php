<?php
$con = mysqli_connect("localhost","aniketh" ,"a1234","test");
if (!$con)
die("Error: " . mysqli_connect_error());
if(isset($_POST['uname'])){
    $uname=$_POST['uname'];
    }
else
    $uname="name not set";
if(isset($_POST['pwd'])){
        $pwd=$_POST['pwd'];
        }
else
        $pwd="password not set";
 $sql = "INSERT INTO login(Username,Password) VALUES ('$uname','$pwd')";
if (mysqli_query($con, $sql))
echo "Inserted successfully ";
else
echo "Error:".mysqli_error($con);
mysqli_close($con);
?>