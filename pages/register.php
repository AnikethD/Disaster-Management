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
if(isset($_POST['email'])){
        $email=$_POST['email'];
        }
    else
        $email="email not set";
 if(isset($_POST['dob'])){
            $dob=$_POST['dob'];
            }
            else
            $dob="email not set";
if(isset($_POST['gender'])){
                $gen=$_POST['gender'];
                }
                else
                $gen="gender not set";
/*$uname=$_REQUEST['uname'];                            
$pwd=$_REQUEST['pwd'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$gen=$_REQUEST['gender'];*/

$sql = "INSERT INTO registration(username,password,email,dob,gender) VALUES ('$uname','$pwd','$email','$dob','$gen')";
if (mysqli_query($con, $sql)){
echo "Inserted successfully ";
header('location:login.html');}
else
echo "Error:".mysqli_error($con);
mysqli_close($con);
?>