<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

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
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide"style="height:85%;width:90%";>
         <div class="image">
            <img src="images/222.png" alt="" style="height:55rem;width: 93%;margin-right:90px";>
         </div>
         <div class="content">
             <h3 style="color:#BF5687;font-size:45px;margin-left:20%";>..القراءة</h3>
            <span style="color:black; font-size:40px;margin-left:5%";>مفتاح العقول وسر نهضة الأمم</span><br>
            <span style="color:black; font-size:25px;margin-right:5%";>-مشروع القراءة أسرار وأنوار-</span><br>
            <a href="more2.php" class="btn"style="margin-left:5%;background-color:#BF5687;color:white";>لمعرفة تفاصيل المشروع أكثر</a>
         </div>
      </div>

   </div>
   </div>
</section>

</div>
<div class="image">
   <img src="images/55.png" alt="" style="height:87rem;width: 93%;margin-left:50px";>
</div>





<br><br><br><br><br><br>
<?php include 'components/footer.php'; ?>

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

</body>
</html> 