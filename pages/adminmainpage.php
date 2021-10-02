<?php
session_start();
// if(!isset($_SESSION['user'])){
//     header('location:adminmainpage.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php  ?>
</head>
<body>
<div> Hello 
<?php echo $_SESSION['uname']?> WELCOME</div>
<a href="logout.php"> Logout</a>
</body>
</html>
