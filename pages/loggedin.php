<?php
session_start();
/*if(!isset($_SESSION['user'])){
    header('location:adminmainpage.php');*/
//}
?>
<!DOCTYPE html>

<!-- Web Tech Project By Raghavendra, Baivab, Aniketh-->
<!-- ################################################################################################ -->

<html>
<head>
<title>We Care</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="logout.php">Logout</a></li>
        <!--<li><i class="fa fa-user"></i> <a href="Register.html">Register</a></li> -->
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +91 9148045493</li>
        <li><i class="fa fa-envelope-o"></i> wecare@gmail.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>



<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo">
      <h1><a href="index1.html">We Care</a></h1>
      <p>One Small Gesture Can Go A Long Way</p>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index1.html">Home</a></li>
      <li class="active"><a href="loggedin.php">About Us</a></li>
      <li class="active"><a href="KarnatakaFlood1.html">What's Happening</a></li>
      <li class="active"><a href="joinourcommunity1.html">Join The Movement</a></li>
      </ul>
    </nav>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>WELCOME <?php echo $_SESSION['uname']?> TO OUR COMMUNITY</h1>
      <p> THANK YOU FOR INVESTING YOUR VALUABLE TIME FOR A SOCIAL CAUSE</p>
  
      
      <img class="imgr borderedbox inspace-5" alt="" src="../images/community.jpg">
     
      <p>The recent floods in Karnataka was one of the worst floods ever to hit the subcontinent in over a decade. This fund will provide relief to survivors in the form of emergency supplies like food, water, and medicine in addition to longer-term recovery assistance to help residents recover and rebuild. All donations to this fund will exclusively support any necessary relief and recovery efforts from this flood in Karnataka ,India.</p>
      <p>All donations to this fund will support recovery and relief efforts for the people affected by the Karnataka floods. Initially, the fund helped volunteers meet survivor's immediate need for food, fuel, clean water, hygiene products, and shelter. Now that the initial relief work is complete, this fund has transitioned to support longer-term recovery efforts run by local, vetted organizations across the region.</p>
    </div>
  </main>
</div>
</div>
<!-- What Can We Do About It? -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">What Can You Do About It?</h2>
    </div>
    <ul class="nospace group btmspace-50 elements">
      <li class="one_quarter">
        <article>
          <figure><img src="../images/donation.jpg" alt="">
            <figcaption>Donate Some Of Your Unwanted Usefull Belongs</figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading"><a href="donate1.html">Donate Some Items</a></h6>
            <p>Donate Your Goods Here</p>
          </div>
        </article>
      </li>
      <li class="one_quarter">
        <article>
          <figure><img src="../images/donate1.jpg" alt="">
            <figcaption>$1 can buy a meal for a family</figcaption>
          </figure>
          <div class="txtwrap">
            <h6 class="heading"><a href="payment1.html">Donate Money</a></h6>
            <p>Please donate how much you, every little bit helps</p>
          </div>
        </article>
      </li>
     
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>