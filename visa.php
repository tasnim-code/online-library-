<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>الدفع</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<section class="checkout-orders">
<!-- https://formspree.io/f/mjvndoqg -->

   <form action="./send-email.php" method="POST" enctype="multipart/form-data">
   <img src="images/order.png" alt="" style="height:45rem;width:65%;margin-left:90px";>
   <h3 style="background-color:#F8A4A4";>طلباتك</h3>

      <div class="display-orders">
      <?php
         $grand_total = 0;
         $cart_items[] = '';
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
      ?>
         <p> <?= $fetch_cart['name']; ?> <span>(<?= 'ريال عماني'.$fetch_cart['price'].' x '. $fetch_cart['quantity']; ?>)</span> </p>
     
     <?php
            }
         }else{
            echo '<p class="empty"> سلتك فارغة </p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <div class="grand-total"> المبلغ الكلي: <span>ريال عماني<?= $grand_total; ?></span></div>
      </div>
      <h3 style="background-color:#F8A4A4";> الاسم: محمد<br>
         67542890987665434<br>
         بنك مسقط</h3>

      <h3 style="background-color:#F8A4A4";>ضع طلبك من فضلك </h3>

      <div class="flex">
         <div class="inputBox">
            <span>اسم الكتب التي تريده للتأكيد:</span>
            <input type="text" name="name" maxlength="20" class="box" required>
         </div>
         <div class="inputBox">
            <span>رقم هاتفك للتواصل المندوب معك :</span>
            <input type="number" name="number"  class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" class="box" required>
         </div>
         <div class="inputBox">
            <span> ايميلك:</span>
            <input type="email" name="email" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>عملية الاستلام :</span>
            <select name="method" class="box" required>
               <option value="توصيل">توصيل للمنزل</option>
               <option value="توصيل">توصيل للمكتب</option>
               <!-- <option value="بدون توصيل">بدون توصيل</option> -->
                <!-- <option value="paytm">paytm</option>
               // <option value="paypal">paypal</option> -->
            </select>
         </div>
<!-- 
         <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
         </form> -->
            <div class="inputBox">
               <span>  مدينتك:</span>
               <input type="text" name="address" placeholder="e.g. Nizwa" class="box" maxlength="50" required>
            </div>
            <div class="inputBox">
               <span> صورة الايصال(إلزامية)</span>
               <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required onchange="updateFileName()">
            </div>
        
          <!-- <div class="inputBox">
         //    <span>address line 01 :</span>
         //    <input type="text" name="flat" placeholder="e.g. flat number" class="box" maxlength="50" required>
         // </div>
         // <div class="inputBox">
         //    <span>address line 02 :</span>
         //    <input type="text" name="street" placeholder="e.g. street name" class="box" maxlength="50" required>
         // </div>
         <div class="inputBox">
            <span>city :</span>
            <input type="text" name="city" placeholder="e.g. Nizwa" class="box" maxlength="50" required>
         </div>
         // <div class="inputBox">
         //    <span>state :</span>
         //    <input type="text" name="state" placeholder="e.g. maharashtra" class="box" maxlength="50" required>
         // </div>
         // <div <div class="inputBox">
         //    <span>pin code :</span>
         //    <input type="number" min="0" name="pin_code" placeholder="e.g. 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
         // </div>class="inputBox">
         //    <span>country :</span>
         //    <input type="text" name="country" placeholder="e.g. Oman" class="box" maxlength="50" required>
         // </div>
         // 
      </div> -->
      
      <input type="submit" name="order" class="btn" value="تأكيد" >
      

   </form>
</section>

 
        
    

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function updateFileName() {
            // Get the file input
            var fileInput = document.getElementById('image');

             Get the file label
             var fileLabel = document.getElementById('file-label');

             Update the label text with the selected file name
            fileLabel.innerText = fileInput.files.length > 0 ? fileInput.files[0].name : 'Choose file...';
        }
    </script>
   

</body>
</html>