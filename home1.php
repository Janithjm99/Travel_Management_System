<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:home1.php');
}


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users1` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');
      }

   }else{
      $message[] = 'incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/st.css">
   
	
</head>
<body>
   

   
<header class="header">

    <div class="flex">

        <a href="home1.php" class="logo"><span>En</span>joy Travel 😋</a>

        <nav class="navbar">
            <ul>
                <li><a href="home1.php">home</a></li>
                <li><a href="#" onclick="alert('Firstly Login!')">Package</a></li>
                <li><a href="#" onclick="alert('Firstly Login!')">Services</a></li>
				<li><a href="about1.php">about</a></li>
                <li><a href="contact1.php">contact</a></li>
                <li><a href="#">account 🔽</a>
                    <ul>
						<li><a href="home1.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            
            <a href="#" class="fas fa-search"></a>
			<div id="user-btn" class="fas fa-user"></div>
        </div>

       
	   
	   
	   
			<div class="container1">

   <div class="form-container">
   <i class="fas fa-times" id="form-close"></i>

   <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>


</div>
        </div>

   

</header>


<div class="content">
      <h3>new places in traveling</h3>
      <p><b>The customer's attention must be on the advising procedure at all times. Above all, despite the difficulty, it is a method to satisfy its denial..</b></p>
      <a href="about1.php" class="btn">discover more</a>
	   </div>
  
	<video autoplay loop muted plays-inline class="video-container">	
		<source src="images/vid-2.mp4" type="video/mp4">
	</video>

<script src="js/script.js"></script>	
</body>
</html>