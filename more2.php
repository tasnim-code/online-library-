<?php

include 'components/connect.php';

session_start();

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
<style>

h1 {
  position: relative;
  text-align: center;
  color: #353535;
  font-size: 50px;
  font-family: "Cormorant Garamond", serif;
}

p {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  text-align: center;
  font-size: 18px;
  color: #676767;
}
.frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}
button {
  margin: 20px;
  outline: none;
}
.custom-btn {
  width: 130px;
  height: 40px;
  padding: 10px 25px;
  border: 2px solid #000;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

/* 1 */
.btn-1 {
  transition: all 0.3s ease;
}
.btn-1:hover {
   box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
}

/* 2 */
.btn-2 {
  
}
.btn-2:after {
  position: absolute;
  content: "";
  top: 5px;
  left: 6px;
  width: 90%;
  height: 70%;
  border: 1px solid #000;
  opacity: 0;
  transition: all 0.3s ease;
}
.btn-2:hover:after {
  opacity: 1;
}


/* 3 */
.btn-3 {
  line-height: 39px;
  padding: 0;
}
.btn-3:hover{
  background: transparent;
  color: #000;
}
.btn-3 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-3:before,
.btn-3:after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: #000;
  transition: all 0.3s ease;
}
.btn-3:before {
  height: 0%;
  width: 2px;
}
.btn-3:after {
  width: 0%;
  height: 2px;
}
.btn-3:hover:before {
  height: 100%;
}
.btn-3:hover:after {
  width: 100%;
}
.btn-3 span:before,
.btn-3 span:after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  background: #000;
  transition: all 0.3s ease;
}
.btn-3 span:before {
  width: 2px;
  height: 0%;
}
.btn-3 span:after {
  width: 0%;
  height: 2px;
}
.btn-3 span:hover:before {
  height: 100%;
}
.btn-3 span:hover:after {
  width: 100%;
}

/* 4 */
.btn-4 {
  position: relative;
  color: #e4c1f9;
  z-index: 2;
  line-height: 40px;
  padding: 0;
}
.btn-4:hover{
  border: none;
}
.btn-4:before,
.btn-4:after {
  position: absolute;
  content: "";
  width: 0%;
  height: 0%;
  border: 2px solid;
  z-index: -1;
  transition: all 0.3s ease;
}
.btn-4:before {
  top: 0;
   left: 0;
   border-bottom-color: transparent;
   border-right-color: transparent;
   border-top-color: #000;
   border-left-color: #000;
}
.btn-4:after{
   bottom: 0;
   right: 0;
   border-top-color: transparent;
   border-left-color: transparent;
   border-bottom-color: #000;
   border-right-color: #000;
}
.btn-4:hover:before,
.btn-4:hover:after {
  border-color: #000;
  height: 100%;
  width: 100%;
}



/* 5 */
.btn-5 {
  background: #ffafcc;
  color: #283618;
  line-height: 42px;
  padding: 0;
  border: none;
}
.btn-5:hover {
  background: transparent;
  color: #000;
   box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
}
.btn-5:before,
.btn-5:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #000;
  transition:400ms ease all;
}
.btn-5:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.btn-5:hover:before,
.btn-5:hover:after{
  width:100%;
  transition:800ms ease all;
}



@-webkit-keyframes shiny-btn1 {
    0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
    80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
    81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
    100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
}


/* 12 */
.btn-12{
  position: relative;
  right: 20px;
  bottom: 20px;
  border:none;
  width: 130px;
  height: 40px;
  line-height: 40px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  border: 2px solid #000;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  background: #e0e5ec;
  color: #e0e5ec;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}

</style>

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
      <!-- <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a> -->
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
         <a href="user_register.php" class="option-btn">مسابقات</a>
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


   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
</header><br><br><br>

<h1>تعرفوا على مشروعنا أكثر</h1><br>
<p style="font-family: Andale Mono, monospace;">
    مشروع أسرار وأنوار</p>
<div class="frame">
<!-- <img src="images/more.png" alt="" style="width:40%;height:20%;margin-left:410px";> -->

  <!-- <button class="custom-btn btn-1">Read More</button> -->
  <!-- <button class="custom-btn btn-2">المقالات </button> -->
  <button class="custom-btn btn-3"><a href="artical.php"><span> المقالات </span></button>
  <button class="custom-btn btn-4"><a href="events.php">أحداث وفعاليات</button>
  <button class="custom-btn btn-5"><a href="contact.php"><span>تواصلوا معنا  </span></button>
  <button class="custom-btn btn-12"><a href="shop.php"><span>اضغط هنا!</span><span>كتبنا</span></button>

  <!-- <button class="custom-btn btn-6"><span>Read More</span></button> -->
  <!-- <button class="custom-btn btn-7">Read More</button>
  <button class="custom-btn btn-8">Read More</button>
  <button class="custom-btn btn-9">Read More</button>
  <button class="custom-btn btn-10">Read More</button>
  
  <button class="custom-btn btn-11">Read More</button> -->

  <!-- <button class="custom-btn btn-12"><a href="shop.php"><span>اضغط هنا!</span><span>كتبنا</span></button> -->
  <!-- <button class="custom-btn btn-13">Read More</button>
  <button class="custom-btn btn-14">Read More</button>
  <button class="custom-btn btn-15">Read More</button>
  <button class="custom-btn btn-16">Read More</button> -->
  <img src="images/more.png" alt="" style="width:40%;height:20%;margin-left:410px";>

</div>
<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>
</body>
</html>