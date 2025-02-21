<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/SMTP.php';
 


if (isset($_POST['email'],$_POST['name'], $_POST['number'])) {

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
        $mail->setFrom('totaa2000ss@gmail.com', ' new message');
        $mail->addAddress('totaa2000ss@gmail.com');
        $mail->addReplyTo('totaa2000ss@gmail.com', ' new message');

        // Content
        $mail->isHTML(true);
        $mail->subject ="new message";
        $mail->Body = "
        <html>
        <h2><b> الموضوع :".$_POST['sub']."<br> <hr>الاسم :".$_POST['name']."<br> رقم الهاتف: ".$_POST['number']."<br> الايميل: ".$_POST['email']."<br>  الرسالة : ".$_POST['msg']."</b></h2>
        </html>";
        
        // $mail->Body = $_POST['number'];

        // Attachment
        // $file_path = $_FILES['image']['tmp_name'];
        // $file_name = $_FILES['image']['name'];
        // $mail->addAttachment($file_path, $file_name);

        // Success Sent Email
        $mail->send();
        echo "
        <script>
            alert('تم إرسال البريد الإلكتروني بنجاح!');
            document.location.href = 'index.php';
        </script>
        ";
           
    } catch (Exception $e) {
        echo "لا يمكن إرسال الرسالة. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "
    <script>
        alert('تم تعبئة جميع البيانات!');
        document.location.href = 'index.php';
    </script>
    ";
}
 
?>
<!-- totaa2000ss@gmail.com -->