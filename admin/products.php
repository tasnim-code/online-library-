<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_product'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   // $discount_price = $_POST['discount_price'];
   // $discount_price = filter_var($discount_price, FILTER_SANITIZE_STRING);
   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/'.$image_01;

   $image_02 = $_FILES['image_02']['name'];
   $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
   $image_size_02 = $_FILES['image_02']['size'];
   $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
   $image_folder_02 = '../uploaded_img/'.$image_02;

   $image_03 = $_FILES['image_03']['name'];
   $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
   $image_size_03 = $_FILES['image_03']['size'];
   $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
   $image_folder_03 = '../uploaded_img/'.$image_03;

   $select_products = $conn->prepare("SELECT * FROM `products` WHERE name = ?");
   $select_products->execute([$name]);

   if($select_products->rowCount() > 0){
      $message[] = 'اسم المنتج موجود بالفعل!';
   }else{

      $insert_products = $conn->prepare("INSERT INTO `products`(name, details, price, image_01, image_02, image_03) VALUES(?,?,?,?,?,?)");
      $insert_products->execute([$name, $details, $price ,$image_01, $image_02, $image_03]);

      if($insert_products){
         if($image_size_01 > 2000000 OR $image_size_02 > 2000000 OR $image_size_03 > 2000000){
            $message[] = 'حجم الصورة كبير جدًا!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            move_uploaded_file($image_tmp_name_02, $image_folder_02);
            move_uploaded_file($image_tmp_name_03, $image_folder_03);
            $message[] = 'تمت إضافة منتج جديد';
         }

      }

   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_product_image = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
   $delete_product_image->execute([$delete_id]);
   $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_img/'.$fetch_delete_image['image_01']);
   unlink('../uploaded_img/'.$fetch_delete_image['image_02']);
   unlink('../uploaded_img/'.$fetch_delete_image['image_03']);
   $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
   $delete_product->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
   $delete_cart->execute([$delete_id]);
   $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
   $delete_wishlist->execute([$delete_id]);
   header('location:products.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>المنتجات</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-products">

   <h1 class="heading">إضافة منتج</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>اسم المنتج (ضروري)</span>
            <input type="text" class="box" required maxlength="100" placeholder="اضف اسم المنتج" name="name">
         </div>
         <div class="inputBox">
            <span>سعر المنتج(ضروري)</span>
            <input type="number" step="any" min="0" class="box" required max="9999999999" placeholder="ادخل سعر المنتج" onkeypress="if(this.value.length == 10) return false;" name="price">
         </div>
         <!-- <div class="inputBox">
            <span>product discount price</span>
            <input type="number" step="any" min="0" class="box"  max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" name="discount_price">
         </div> -->
         <!-- <div class="product__categories">
                            <label for="">Category</label>
                            <div class="categories">
                                <div class="category checked">
                                    <input type="radio" name="product_category" value="1"  checked hidden />
                                    laptops
                                </div>
                                <div class="category">
                                    <input type="radio" name="product_category" value="2" hidden />
                                    Engagement/Marriage Events
                                </div>
                                <div class="category">
                                    <input type="radio" name="product_category" value="3" hidden />
                                    Social Events
                                </div>
                            </div>
         </div> -->
        <div class="inputBox">
            <span>الصورة الاولى (ضروري)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        <div class="inputBox">
            <span> الصورة الثانية  (ضروري)</span>
            <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
        </div>
        <div class="inputBox">
            <span>الصورة الثالثة</span>
            <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" >
        </div>
         <div class="inputBox">
            <span>تفاصيل المنتج (ضروري)</span>
            <textarea name="details" placeholder="اضف تفاصيل المنتج" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="إضافة المنتج" class="btn" name="add_product">
   </form>

</section>

<section class="show-products">

   <h1 class="heading">المنتجات المضافة</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products`");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_products['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="price">ريال عماني<span><?= $fetch_products['price']; ?></span></div>
      <div class="details"><span><?= $fetch_products['details']; ?></span></div>
      <div class="flex-btn">
         <a href="update_product.php?update=<?= $fetch_products['id']; ?>" class="option-btn">تحديث</a>
         <a href="products.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('حذف المنتج؟');">حذف</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">لم يتم إضافة اي منتج</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>