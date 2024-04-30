<?php

@include 'config.php';


if(isset($_POST['add_places'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = mysqli_real_escape_string($conn, $_POST['price']);
   $price1 = mysqli_real_escape_string($conn, $_POST['price1']);
   $under = mysqli_real_escape_string($conn, $_POST['under']);
   $above = mysqli_real_escape_string($conn, $_POST['above']);
   $code = mysqli_real_escape_string($conn, $_POST['code']);
   $details = mysqli_real_escape_string($conn, $_POST['details']);
   $ardate = mysqli_real_escape_string($conn, $_POST['ardate']);
   $ledate = mysqli_real_escape_string($conn, $_POST['ledate']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folter = 'uploaded_img/'.$image;

   $select_places_name = mysqli_query($conn, "SELECT name FROM `place1` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_places_name) > 0){
      $message[] = 'place name already exist!';
   }else{
      $insert_places = mysqli_query($conn, "INSERT INTO `place1`(name, under, above, code, details, price, price1, image, ardate, ledate) VALUES('$name', '$under', '$above', '$code', '$details', '$price', '$price1', '$image', '$ardate', '$ledate')") or die('query failed');

      if($insert_places){
         if($image_size > 2000000){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name, $image_folter);
            $message[] = 'place added successfully!';
         }
      }
   }

}

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $select_delete_image = mysqli_query($conn, "SELECT image FROM `place1` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `place1` WHERE id = '$delete_id'") or die('query failed');
  
   header('location:admin_places.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style2.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="add-places">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>add new places</h3>
      <input type="text" class="box" required placeholder="Enter place name" name="name">
      <input type="number" min="0" class="box" required placeholder="Enter Past Place price" name="price">
	  <input type="number" min="0" class="box" required placeholder="Enter Real Place price" name="price1">
	  <input type="number" min="0" class="box" required placeholder="Enter under 12 year children" name="under">
	  <input type="number" min="0" class="box" required placeholder="Enter above 12 year persons" name="above">
	  <input type="text" class="box" required placeholder="Enter place code" name="code">
	  <input type="date" class="box" name="ardate">
	  <input type="date" class="box" name="ledate">
      <textarea name="details" class="box" required placeholder="Enter Place Details" cols="30" rows="10"></textarea>
      <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
      <input type="submit" value="add place" name="add_places" class="btn">
   </form>

</section>

<section class="show-places">

   <div class="box-container">

      <?php
         $select_places = mysqli_query($conn, "SELECT * FROM `place1`") or die('query failed');
         if(mysqli_num_rows($select_places) > 0){
            while($fetch_places = mysqli_fetch_assoc($select_places)){
      ?>
      <div class="box" method="POST">
	     <img class="image" src="uploaded_img/<?php echo $fetch_places['image']; ?>" alt="">
		 <div class="name"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;<?php echo $fetch_places['name']; ?></div>
         <div class="details"><?php echo $fetch_places['details']; ?></div>
		 <div class="name"><?php echo $fetch_places['ardate']; ?>&nbsp; <b>To</b>&nbsp; <?php echo $fetch_places['ledate']; ?></div>
		 <div class="price">Rs. <?php echo $fetch_places['price']; ?>/=</div>
		 <div class="price1">Rs. <?php echo $fetch_places['price1']; ?>/=</div>
		 <div class="name">Under 12 years Children: <?php echo $fetch_places['under']; ?></div>
		 <div class="name">Above 12 years Persons: <?php echo $fetch_places['above']; ?></div>
		 <div class="name">Pakage Code: <?php echo $fetch_places['code']; ?></div>
         <a href="#" class="option-btn">update</a>
         <a href="admin_places.php?delete=<?php echo $fetch_places['id']; ?>" class="delete-btn" onclick="return confirm('delete this place?');">delete</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no places added yet!</p>';
      }
      ?>
   </div>
   

</section>

<script src="js/admin_script.js"></script>

</body>
</html>