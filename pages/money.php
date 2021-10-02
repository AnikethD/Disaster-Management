<?php
$con = mysqli_connect("localhost","root" ,"","test");
if (!$con)
die("Error: " . mysqli_connect_error());

if(isset($_POST['amount'])){
$amount=$_POST['amount'];
}
/*$uname=$_REQUEST['uname'];                            
$pwd=$_REQUEST['pwd'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$gen=$_REQUEST['gender'];*/

/*$sql = "INSERT INTO registration donated money ='$amount' where username ='<?php $_SESSION['uname']?>'";*/
$a=<?php $_SESSION['uname']?>
$sql="SELECT * FROM registration where username='a'";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);

$sql1 = "UPDATE table registration 'donated_money'=$amount WHERE username={$row['uname']} ";
$query=mysqli_query($con,$sql1);
//$row=mysqli_num_rows($query);
if (mysqli_query($con, $sql1)){
echo "Inserted successfully ";
header('location:index1.html');}
/*else
echo "Error:".mysqli_error($con);*/
mysqli_close($con);
?>

