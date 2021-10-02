<?php
session_start();

$con=mysqli_connect('localhost','aniketh','a1234');
if($con){
echo"connection successful";
}else{
    echo "no connection";
}

$db=mysqli_select_db($con,'test');

if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];

    $sql="SELECT * FROM registration where username='$uname' && password='$pwd'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_num_rows($query);
        if($row==1){
            echo "login successful";
            $_SESSION['uname']=$uname;
            header('location: loggedin.php');}
        else{
            echo "login failed";
           header('location:login.html');
        }    
        
    
}

?>