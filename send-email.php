<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/SMTP.php';
 


if (isset($_POST['email'],$_POST['name'], $_POST['number'],  $_FILES['image'])) {

    $mail = new PHPMailer(true);

    try {

        // Server Settings
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     ='totaa2000ss@gmail.com';
        $mail->Password     ='pfojnbmvamclodxh';
        $mail->SMTPSecure   = 'tls';
        $mail->Port         = 587;

        // Recipient
        $mail->setFrom('totaa2000ss@gmail.com', ' new order');
        $mail->addAddress('totaa2000ss@gmail.com');
        $mail->addReplyTo('totaa2000ss@gmail.com', ' new order');

        // Content
        $mail->isHTML(true);
        $mail->Body = "
        <html>
        <h2><b> اسماء الكتب :".$_POST['name']."<br> رقم الهاتف: ".$_POST['number']."<br> الايميل: ".$_POST['email']."<br> عملية الاستلام: ".$_POST['method']."<br> المدينة: ".$_POST['address']."</b></h2>
        </html>";
        // $mail->Body = $_POST['name'];
        // $mail->Body = $_POST['number'];

        // Attachment
        $file_path = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];
        $mail->addAttachment($file_path, $file_name);

        // Success Sent Email
        $mail->send();
        echo "
        <script>
            alert('تم رسال البريد الإلكتروني بنجاح');
            document.location.href = 'index.php';
        </script>
        ";
           
    } catch (Exception $e) {
        echo "لا يمكن ارسال الرسالة. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "
    <script>
        alert('ملء كافة المدخلات!');
        document.location.href = 'index.php';
    </script>
    ";
}
include 'components/connect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['order'])){

    $name = $_POST['name'];
    // $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    // $number = filter_var($number, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    // $email = filter_var($email, FILTER_SANITIZE_STRING);
    $method = $_POST['method'];
    $address = $_POST['address'];
 
    // $method = filter_var($method, FILTER_SANITIZE_STRING);
    // $image_name=$_FILES['image']['name'];
    // $tem_name=$_FILES['image']['tem_name'];
    // $folder= './image/' .$image_name;
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $filename;
   
 
    $total_products = $_POST['total_products'];
    $total_price = $_POST['total_price'];
 
      if (move_uploaded_file($tempname, $folder)) {
          echo "<h3>  شكرا جزيلا لك</h3>";
    } else {
       echo "<h3>  للأسف لم يتم تحميل الصورة</h3>";
    }  
    $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
    $check_cart->execute([$user_id]);
 
    if($check_cart->rowCount() > 0){
       
       $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method,image,address,total_products, total_price) VALUES(?,?,?,?,?,?,?,?,?)");
       $insert_order->execute([$user_id, $name, $number, $email, $method,$filename,$address,$total_products, $total_price]);
       
       if($insert_order){
             
             $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
             $delete_cart->execute([$user_id]);
             $message[] = 'order placed successfully!';
             // move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);           
         }
       }else{
        $message[] = 'your cart is empty';
    }
 }
 
?>
<!-- totaa2000ss@gmail.com -->