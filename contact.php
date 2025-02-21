<?php

include 'components/connect.php';


// session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// if(isset($_POST['send'])){

//    $name = $_POST['name'];
//    $name = filter_var($name, FILTER_SANITIZE_STRING);
//    $email = $_POST['email'];
//    $email = filter_var($email, FILTER_SANITIZE_STRING);
//    $number = $_POST['number'];
//    $number = filter_var($number, FILTER_SANITIZE_STRING);
//    $msg = $_POST['msg'];
//    $sub = $_POST['sub'];
//    $msg = filter_var($msg, FILTER_SANITIZE_STRING);

//    $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
//    $select_message->execute([$name, $email, $number, $msg]);

//    if($select_message->rowCount() > 0){
//       $message[] = 'already sent message!';
//    }else{

//       $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
//       $insert_message->execute([$user_id, $name, $email, $number, $msg]);

//       $message[] = 'sent message successfully!';

//    }

// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>تواصل مع الكوادر 
   </title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'more.php'; ?>

<section class="contact">
<!-- https://formspree.io/f/xrgnvlwz -->
   <form action="contact-email.php" method="POST" >
      <h3> ابقى على تواصل معنا</h3>
      <input type="text" name="sub" placeholder="الموضوع " required maxlength="20" class="box">
      <input type="text" name="name" placeholder="اسمك " required maxlength="20" class="box">
      <input type="email" name="email" placeholder=" ايميلك" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder=" رقم الهاتف" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder=" اكتب رسالتك هنا " cols="30" rows="10"></textarea>
      <input type="submit" value="ارسال" name="send" class="btn">
   
   </form>

</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>

<!--password of email: 8DA1F05AA357E4395722471BD31F1706848E -->
 <!-- security token:6f402dee-83c9-4428-ad0a-281fd0f65746 -->