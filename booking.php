<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];


if(isset($_POST['booking'])){

	$name = mysqli_real_escape_string($conn, $_POST['faname'].' '. $_POST['laname']);
	$code = mysqli_real_escape_string($conn, $_POST['code']);
	$ncard = mysqli_real_escape_string($conn, $_POST['ncard']);
	$exmonth = mysqli_real_escape_string($conn, $_POST['exmonth']);
	$zcode = mysqli_real_escape_string($conn, $_POST['zcode']);
	$exyear = mysqli_real_escape_string($conn, $_POST['exyear']);
	$cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
	$amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, $_POST['no'].', '. $_POST['street'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['zcode']);
    $placed_on = date('d-M-Y');


    $booking_query = mysqli_query($conn, "SELECT * FROM `booking` WHERE name = '$name' AND code = '$code' AND ncard = '$ncard' AND exmonth = '$exmonth' AND zcode = '$zcode' AND exyear = '$exyear' AND cvv = '$cvv' AND amount = '$amount' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address'") or die('query failed');

    if(mysqli_num_rows($booking_query) > 0){
        $message[] = 'booking placed already!';
    }else{
        mysqli_query($conn, "INSERT INTO `booking`(user_id, name, code, ncard, exmonth, zcode, exyear, cvv, amount, number, email, method, address, placed_on) VALUES('$user_id', '$name', '$code', '$ncard', '$exmonth', '$zcode', '$exyear', '$cvv', '$amount', '$number', '$email', '$method', '$address', '$placed_on')") or die('query failed');
        $message[] = 'booking placed successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/st.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <center><h3>checkout Booking</h3>
    <p> <a href="home.php">home</a> / checkout </p></center>
</section>

<section class="book">
 <div class="row">
  
 <div class="image">
 <img src="images/book-img.svg" alt="">
 </div>
 
 <form action="" method="POST"> 
 
  <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>Your Select Package Code :</span>
                    <input type="text" name="code" placeholder="Place Code">
                </div></br>
                <div class="inputBox">
                    <span>Your First Name :</span>
						<input type="text" name="faname" placeholder="Enter Your First Name" id="first-name-input" class="box" required />
							<h2 id="first-name-error" class="hide required-color error-message">Invalid Input</h2>
							<h2 id="empty-first-name" class="hide required-color error-message">First Name Cannot Be Empty</h2>
                </div></br>
				<div class="inputBox">
                    <span>Your Last Name :</span>
						<input type="text" name="laname" placeholder="Enter Your Last Name" id="last-name-input" class="box" required />
							<h2 id="last-name-error" class="hide required-color error-message">Invalid Input</h2>
							<h2 id="empty-last-name" class="hide required-color error-message">Last Name Cannot Be Empty</h2> 
                </div></br>
                <div class="inputBox">
                    <span>Your Email :</span>
						<input type="email" name="email" placeholder="Enter Your Email" id="email" class="box" required />
							<h2 id="email-error" class="hide required-color error-message">Invalid Email</h2>
							<h2 id="empty-email" class="hide required-color error-message">Email Cannot Be Empty</h2>
                </div></br>
                <div class="inputBox">
                    <span>Address Line 01 :</span>
                    <input type="text" name="no" placeholder="Eg. House no.">
                </div></br>
				<div class="inputBox">
                    <span>Address Line 02 :</span>
                    <input type="text" name="street" placeholder="Eg. Streen Name">
                </div></br>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city" placeholder="Eg. Colombo">
                </div></br>
                <div class="flex">
                    <div class="inputBox">
                        <span>Country :</span>
                        <input type="text" name="country" placeholder="Eg. Sri Lanka">
                    </div></br>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="number" min="0" name="zcode" placeholder="123 456">
                    </div></br>
                </div>

            </div></br></br>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div></br>
				<div class="inputBox">
                <span>Payment Method :</span>
                <select name="method">
                    <option value="credit card">Credit card</option>
                    <option value="paypal">Paypal</option>
                    <option value="payoneer">Payoneer</option>
                </select>
                </div></br>
                <div class="inputBox">
                    <span>Name on Card :</span>
                    <input type="text" name="ncard" placeholder="deo solone">
                </div></br>
                <div class="inputBox">
                    <span>Pin Number :</span>
                    <input type="number" name="number" placeholder="1111-2222-3333-4444">
                </div></br>
                <div class="inputBox">
                    <span>Exp Month :</span>
                    <input type="text" name="exmonth" placeholder="March">
                </div></br>
                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year :</span>
                        <input type="number" name="exyear" placeholder="2022">
                    </div></br>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123">
                    </div></br>
					<div class="inputBox">
                        <span>Pay Amount : Rs. </span>
                        <input type="text" name="amount" placeholder="123">
                    </div>
                </div>

            </div>
        <center><input type="submit" name="booking" value="Book now" class="btn"></center>

    </form>
</div>
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
	<script src="js/book.js"></script>
</body>
</html>