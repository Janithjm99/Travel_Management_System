<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];


if(isset($_POST['update_booking'])){
   $booking_id = $_POST['booking_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `booking` SET payment_status = '$update_payment' WHERE id = '$booking_id'") or die('query failed');
   $message[] = 'payment status has been updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `booking` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_booking.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style2.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="placed-orders">

   <h1 class="title">placed booking</h1>

   <div class="box-container">

      <?php
      
      $select_booking = mysqli_query($conn, "SELECT * FROM `booking`") or die('query failed');
      if(mysqli_num_rows($select_booking) > 0){
         while($fetch_booking = mysqli_fetch_assoc($select_booking)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_booking['user_id']; ?></span> </p>
		 <p> Pakage Code : <span><?php echo $fetch_booking['code']; ?></span> </p>
         <p> Full Name : <span><?php echo $fetch_booking['name']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_booking['email']; ?></span> </p>
         <p> Address : <span><?php echo $fetch_booking['address']; ?></span> </p>
         <p> payment method : <span><?php echo $fetch_booking['method']; ?></span> </p>
		 <p> Pin Number : <span><?php echo $fetch_booking['number']; ?></span> </p>
		 <p> Name on Card : <span><?php echo $fetch_booking['ncard']; ?></span> </p>
		 <p> Exp Month : <span><?php echo $fetch_booking['exmonth']; ?></span> </p>
		 <p> Exp Year : <span><?php echo $fetch_booking['exyear']; ?></span> </p>
		 <p> Zip Code : <span><?php echo $fetch_booking['zcode']; ?></span> </p>
		 <p> CVV : <span><?php echo $fetch_booking['cvv']; ?></span> </p>
		 <p> Customer Pay Amount : <span>Rs. <?php echo $fetch_booking['amount']; ?></span> </p>
         <form action="" method="post">
            <input type="hidden" name="booking_id" value="<?php echo $fetch_booking['id']; ?>">
            <select name="update_payment">
               <option disabled selected><?php echo $fetch_booking['payment_status']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" name="update_booking" value="update" class="option-btn">
            <a href="admin_booking.php?delete=<?php echo $fetch_booking['id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no booking placed yet!</p>';
      }
      ?>
   </div>

</section>

<script src="js/admin_script.js"></script>

</body>
</html>