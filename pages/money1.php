<?php
session_start();

$con=mysqli_connect('localhost','aniketh','a1234','test');
//echo $con;
if($con){
echo"connection successful";
}else{
    echo "no connection";
}


$u=$_SESSION['uname'];
//$u="a";



    $amount=$_REQUEST['amount'];
    echo "hi";
    $sql="UPDATE  registration set donated_money = '$amount' where username='$u' ";
   echo "$sql";
    $query=mysqli_query($con,$sql);
  //  echo $query;
    //$row=mysqli_num_rows($query);
        if($query==1)
         {
              
            echo "Inserted succesfully";}
             //header('location: loggedin.php');}
        else{
            echo "Insertion Failed failed";
          // header('location:login.html');
        }    
        
    


?>