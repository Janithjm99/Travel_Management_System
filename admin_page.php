<?php

@include 'config.php';


?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/admin_style2.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>En</span>joy Travel 😋</p>
  <a href="admin_page.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="admin_places.php"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Places</a>
  <a href="admin_booking.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Booking</a>
  <a href="admin_contacts.php"class="icon-a"><i class="fa fa-envelope icons"></i> &nbsp;&nbsp;Messages</a>
  <a href="admin_users.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="home1.php"class="icon-a"><i class="fa fa-sign-out icons"></i> &nbsp;&nbsp;Logout</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: #fff;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: #fff;" class="nav2"  >&#9776; Dashboard</span>
</div>
<section class="dashboard">

   <div class="box-container">

      <div class="box">
         <?php
            $select_pending = mysqli_query($conn, "SELECT * FROM `booking` WHERE payment_status = 'pending'") or die('query failed');
            $number_of_pending = mysqli_num_rows($select_pending);
          
         ?>
         <p><?php echo $number_of_pending; ?>
         <br/><span>Total Pendings</span></br></p>
		 <i class="fa fa-hourglass-half box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_completed = mysqli_query($conn, "SELECT * FROM `booking` WHERE payment_status = 'completed'") or die('query failed');
            $number_of_completed = mysqli_num_rows($select_completed);
         ?>
         <p><?php echo $number_of_completed; ?><br>
         <span>Complete Paymets</span></br></p>
		 <i class="fa fa-check box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_booking = mysqli_query($conn, "SELECT * FROM `booking`") or die('query failed');
            $number_of_booking = mysqli_num_rows($select_booking);
         ?>
         <p><?php echo $number_of_booking; ?><br>
         <span>Booking</span></br></p>
		 <i class="fa fa-shopping-bag box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_places = mysqli_query($conn, "SELECT * FROM `place1`") or die('query failed');
            $number_of_places = mysqli_num_rows($select_places);
         ?>
         <p><?php echo $number_of_places; ?><br>
         <span>Places</span></br></p>
		 <i class="fa fa-list-alt box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users1` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <p><?php echo $number_of_users; ?><br>
         <span>Users</span></p>
		 <i class="fa fa-user box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_admin = mysqli_query($conn, "SELECT * FROM `users1` WHERE user_type = 'admin'") or die('query failed');
            $number_of_admin = mysqli_num_rows($select_admin);
         ?>
         <p><?php echo $number_of_admin; ?><br>
         <span>Admins</span></p>
		 <i class="fa fa-user box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_account = mysqli_query($conn, "SELECT * FROM `users1`") or die('query failed');
            $number_of_account = mysqli_num_rows($select_account);
         ?>
         <p><?php echo $number_of_account; ?><br>
         <span>Total Accounts</span></p>
		 <i class="fa fa-users box-icon"></i>
      </div>

      <div class="box">
         <?php
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <p><?php echo $number_of_messages; ?><br>
         <span>Messages</span></p>
		 <i class="fa fa-envelope box-icon"></i>
      </div>

   </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>



<script src="js/admin_script.js"></script>

</body>
</html>