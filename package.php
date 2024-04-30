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
   

   
<?php @include 'header.php'; ?>

<section class="place">

   <h1 class="title">latest package</h1>

   <div class="box-container1">

      <?php
         $select_place = mysqli_query($conn, "SELECT * FROM `place1`") or die('query failed');
         if(mysqli_num_rows($select_place) > 0){
            while($fetch_place = mysqli_fetch_assoc($select_place)){
      ?>
<form action="" method="POST" class="box1"> 
         <img src="uploaded_img/<?php echo $fetch_place['image']; ?>" alt="" class="image">
         <div class="name"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;<b><?php echo $fetch_place['name']; ?></b></div>
		 <div class="name1">Place Code: <?php echo $fetch_place['code']; ?></div>
		 <div class="name1">Arrival Date: <?php echo $fetch_place['ardate']; ?></div>
		 <div class="name1">Leaving Date: <?php echo $fetch_place['ledate']; ?></div>
		 <div class="name1">Under 12 year Children: <?php echo $fetch_place['under']; ?></div>
		 <div class="name1">Above 12 years Persons: <?php echo $fetch_place['above']; ?></div>
		 <div class="price">Rs.<?php echo $fetch_place['price']; ?>/=</div>
		 <div class="price1">Rs.<?php echo $fetch_place['price1']; ?>/=</div>
		 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div></br></br>
						 
         <input type="hidden" name="place_id" value="<?php echo $fetch_place['id']; ?>">
         <input type="hidden" name="place_name" value="<?php echo $fetch_place['name']; ?>">
         <input type="hidden" name="place_price" value="<?php echo $fetch_place['price']; ?>">
		 <input type="hidden" name="place_price1" value="<?php echo $fetch_place['price1']; ?>">
		 <input type="hidden" name="place_details" value="<?php echo $fetch_place['details']; ?>">
         <input type="hidden" name="place_image" value="<?php echo $fetch_place['image']; ?>">
		 <input type="submit" value="Read More" class="btn">
         <a href="booking.php" class="btn">Book Now</a>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty1">no pkaces added yet!</p>';
      }
      ?>

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
</body>
</html>