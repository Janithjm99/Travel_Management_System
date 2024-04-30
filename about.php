<?php

@include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/st.css">
   
   <link rel="stylesheet" href="css/swiper-bundle.min.css">

   <script src="js/swiper-bundle.min.js"></script>   

</head>
<body>
  
  
<?php @include 'header.php'; ?>

<section class="heading">
    <center><h3>about us</h3>
    <p> <a href="home.php">home</a> / About </p></center>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Who we are?</h3>
            <p>Founded in 2011, TravelTriangle is India’s leading online holiday marketplace bringing both the travelers, and trusted & expert 
			travel agents on a common platform. With the recent Series C funding of $12 Million from Nandan Nilekani and Sanjeev Aggarwal backed 
			Fundamentum in early 2018, it is on its way of encompassing all the components of holiday eco-system through its highly innovative and 
			technology-focused product. Besides, having already raised close to a cumulative funding of $20 Million from SAIF Partners, 
			Bessemer Venture Partners and RB Investments put together, the company has already achieved operating profitability, 
			and on track to become EBITDA profitable by next year.</p>
            <a href="package.php" class="btn">Traveling now</a>
        </div>

    </div>

</section>   
    <h1 class="title">client's reviews</h1>

<div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">

                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Saam Yandel</h2>
                            <p class="description">The quality of all the items enclosed is fantastic; so fresh and hardly any plastic in sight!</p>
							<div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
							
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Jimee Mikira</h2>
                            <p class="description">I'll never go back to supermarket fruit and veg again. The quality and freshness are excellent.</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Yang Zung</h2>
                            <p class="description">Easily ordered online and delivered quickly. Friendly delivery drivers and good communication</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Midel Robin</h2>
                            <p class="description">Always those wonderful peaches, by the half-bushel! Plus, today, super-sweet green grapes, perfect Bartlett pears, and a quart of childhood-memory Concord grapes. Love your fruits.</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Salee Aleksender</h2>
                            <p class="description">My kids are calling the Fuji apples “candy apples” because they taste as good as candy!! We are going through them at record speed!</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile6.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Wins</h2>
                            <p class="description">I think your products are excellent. I like being able to buy a box of apples or peaches for lower cost than per pound.</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile7.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Leonel Frank</h2>
                            <p class="description">Excellent produce, excellent service, very good value for money – what else is there to say!!!</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                           
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile8.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Sung-Yalee</h2>
                            <p class="description">The packaging was superior and wonderful for a gift. Shipped across the country no problem.</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                            
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile9.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Gusta</h2>
                            <p class="description">Beautiful box and can give as a gift!! Presentation was awesome! Came in fresh & juicy🍐🍐🍐🍐💦 would recommend. My kids were excited for fresh fruit.
Thank you for a quick delivery</p>
                            <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        
    </body>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
   
 
    <!-- JavaScript -->
  
	
	<script>
	var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
  
	</script>



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