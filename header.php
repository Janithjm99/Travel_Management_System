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


<header class="header">

    <div class="flex">

        <a href="home.php" class="logo"><span>En</span>joy Travel 😋</a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="#services">Services</a></li>
				<li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="#">account 🔽</a>
                    <ul>
                        <li><a href="home.php">login</a></li>
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