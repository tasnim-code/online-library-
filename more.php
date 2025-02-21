<?php

include 'components/connect.php';

// session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" type="x-icon" href="logo.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>القراءة أسرار و أنوار</title>
   

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<header class="header"  style="background-color:#BF5687";>

   <section class="flex">
   <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <!-- <a href="search_page.php"><i class="fas fa-search"></i></a> -->
         <div id="user-btn" class="fas fa-sync-alt fa-spin"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <!-- <a href="update_user.php" class="btn">update profile تحديث الملف الشخصي </a> -->
         <div class="flex-btn">
            <a href="mosabqat.php" class="option-btn">مسابقات</a>
            <a href="user_login.php" class="option-btn">أيقونات أخرى</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>للمزيد</p>
         <div class="flex-btn">
            <a href="mosabqat.php" class="option-btn" style="background-color:#BF5687";>مسابقات </a>
            <a href="user_login.php" class="option-btn"  style="background-color:#BF5687";>أيقونات أخرى</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

      <!-- <nav class="navbar"> -->
       
         <!-- <a href="index.php"> الصفحة الرئيسية</a>
         <a href="project.php"> التعريف بالمشروع</a> -->
         <!-- <a href="shop.php">عن كتبي</a>
         <a href="artical.php"> المقالات </a>
         <a href="events.php"> أحداث وفعاليات </a>
         <a href="contact.php"> تواصلوا معنا </a> -->
         <!-- <a href="about.php"> مسابقاتنا </a> -->
       
      <!-- </nav> -->
      <!-- <div style="width:20%;height:10%; items-align:center";> -->
         
         <a href="index.php" class="logo" style="color: white";> القراءة أسرار و أنوار</a>
         <!-- <div class="image">
               <img src="images/1.png" alt="" style="width:10%;height:10%";>
         </div>
      </div> -->

   </section>

</header>

<body>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 0,
       },
      650: {
        slidesPerView: 0,
      },
      768: {
        slidesPerView: 0,
      },
      1024: {
        slidesPerView: 1,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 2,
      },
   },
});

</script>
<script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
</body>
</html> 