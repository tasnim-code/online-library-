<?php

include 'components/connect.php';

// session_start();

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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> قائمةالكتب</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'more.php'; ?>

<section class="products">

   <h1 class="heading"> الكتب</h1>

   <div class="box-container" >

   <form action="" method="post"  style="width:200px";>
      <div class="box">
         <img src="images/2.jpeg" alt="">
         <p class="price" style="font-size:33px";> 15 ريال عماني </p>
         <p style="font-size:23px";> this story is very good</p>
         <a href="https://wa.me/?text=ان واتساب" target="_blank" class="btn">لشراء الكتب التواصل مع </a>
      </div>
   </form>
  
   <form action="" method="post"  style="width:200px";>
      <div class="box">
         <img src="images/3.jpeg" alt="">
         <p class="price" style="font-size:33px";> 23 ريال عماني </p>
         <p style="font-size:23px";> this story is very good</p>
         <a href="https://wa.me/?text=ان واتساب" target="_blank" class="btn">لشراء الكتب التواصل مع </a>
      </div>
   </form>
  
   <form action="" method="post"  style="width:200px";>
      <div class="box">
         <img src="images/4.jpeg" alt="">
         <p class="price" style="font-size:33px";> 20 ريال عماني </p>
         <p style="font-size:23px";> this story is very good</p>
         <a href="https://wa.me/?text=ان واتساب" target="_blank" class="btn">لشراء الكتب التواصل مع </a>
      </div>
   </form>
  
   <form action="" method="post"  style="width:200px";>
      <div class="box">
         <img src="images/1.jpeg" alt="">
         <p class="price" style="font-size:33px";> 29 ريال عماني </p>
         <p style="font-size:23px";> this story is very good</p>
         <a href="https://wa.me/?text=ان واتساب" target="_blank" class="btn">لشراء الكتب التواصل مع </a>
      </div>
   </form>
  
  


   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>