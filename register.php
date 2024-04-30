<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['faname'].' '. $_POST['laname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users1` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users1`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:home1.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/st.css">
   
   

</head>
<body>



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
   
<div class="form-container1">

   <form action="" method="post" autocomplete="off">
      <h3>register now</h3>
	  
	   <input type="text" name="faname" placeholder="Enter Your First Name" id="first-name-input" class="box" required />
          <span id="first-name-error" class="hide required-color error-message">Invalid Input</span>
          <span id="empty-first-name" class="hide required-color error-message">First Name Cannot Be Empty</span>
		  
	   <input type="text" name="laname" placeholder="Enter Your Last Name" id="last-name-input" class="box" required />
          <span id="last-name-error" class="hide required-color error-message">Invalid Input</span>
          <span id="empty-last-name" class="hide required-color error-message">Last Name Cannot Be Empty</span>
		  
	   <input type="email" name="email" placeholder="Enter Your Email" id="email" class="box" required />
          <span id="email-error" class="hide required-color error-message">Invalid Email</span>
          <span id="empty-email" class="hide required-color error-message">Email Cannot Be Empty</span>
		  
       <input type="password" name="password" placeholder="Enter Your Password" id="password" class="box" required />
          <span id="password-error" class="hide required-color error-message">Passwords Should Have Letter, Special symbols, Numbers And Length >= 8</span>
          <span id="empty-password" class="hide required-color error-message">Password Cannot Be Empty</span>
		
       <input type="password" name="cpassword" placeholder="Confirm Your Password" id="verify-password" class="box" required />
          <span id="verify-password-error" class="hide required-color error-message">Should Be Same As Previous Password</span>
          <span id="empty-verify-password" class="hide required-color error-message">Password Cannot Be Empty</span>		
      
      <select name="user_type" class="box">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" id="submit-button" class="btn">
      <p>already have an account? <a href="home1.php">login now</a></p>
   </form>

</div>

<script src="js/ver.js"></script>
</body>
</html>