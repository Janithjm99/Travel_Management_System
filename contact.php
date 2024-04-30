<?php

@include 'config.php';

session_start();

// Check if 'user_id' is set in the session
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
   // Rest of your code that uses $user_id
}

// Rest of your code...

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['faname'].' '. $_POST['laname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    } else {
        // Use the defined $user_id in the query
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/st.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <center><h3>contact us</h3>
    <p> <a href="home.php">home</a> / contact </p></center>
</section>

<section class="contact">

    <form action="" method="POST" autocomplete="off">
        <h3>send us message!</h3>
        <input type="text" name="faname" placeholder="Enter Your First Name" id="first-name-input" class="box" required />
            <span id="first-name-error" class="hide required-color error-message">Invalid Input</span>
            <span id="empty-first-name" class="hide required-color error-message">First Name Cannot Be Empty</span>
		  
	   <input type="text" name="laname" placeholder="Enter Your Last Name" id="last-name-input" class="box" required />
            <span id="last-name-error" class="hide required-color error-message">Invalid Input</span>
            <span id="empty-last-name" class="hide required-color error-message">Last Name Cannot Be Empty</span>
		  
        <input type="email" name="email" placeholder="Enter Your Email" id="email" class="box" required />
            <span id="email-error" class="hide required-color error-message">Invalid Email</span>
            <span id="empty-email" class="hide required-color error-message">Email Cannot Be Empty</span>
		  
        <input type="number" name="number" placeholder="Enter Your Nmber" id="phone" class="box" required />
		    <span id="phone-error" class="hide required-color error-message">Phone Number Should Have 10 Digits</span>
            <span id="empty-phone" class="hide required-color error-message">Phone cannot be empty</span>
			
        <textarea name="message" class="box" placeholder="Enter Your Message" required cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="send" id="submit-button" class="btn">
    </form>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>



<div class="icon1">
	<ul>
        <!-- Facebook Icon -->
		<a href="#">
        <li class="facebook">
            <i class="fa-brands fa-facebook-f"></i>
            
        </li>
		</a>

        <!-- Twitter Icon -->
		<a href="#">
        <li class="twitter">
            <i class="fa-brands fa-twitter"></i>
            
        </li>
		</a>

        <!-- Linkedin Icon -->
		<a href="https://www.linkedin.com/in/janith-madusanka-9b2b66236/">
        <li class="linkedin">
            <i class="fa-brands fa-linkedin"></i>
            
        </li>
		</a>

        <!-- GitHub Icon -->
		<a href="#">
        <li class="github">
            <i class="fa-brands fa-github"></i>
            
        </li>
		</a>

        <!-- YouTube Icon -->
		<a href="https://www.youtube.com/channel/UC0icYZ76C2nDKdZ3IpPsgYg">
        <li class="youtube">
            <i class="fa-brands fa-youtube"></i>
            
        </li>
		</a>
		<a href="#">
        <li class="instagram">
            <i class="fa-brands fa-instagram"></i>  
        </li>
		</a>
		</ul>
    </div>
	<script src="js/cont.js"></script>
</body>
</html>