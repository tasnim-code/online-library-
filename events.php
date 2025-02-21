<?php

include 'components/connect.php';

// session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>الأحداث</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'more.php'; ?>

<section class="about">

   <div class="row">

      <!-- <div class="image">
         <img src="images/logoo (2).png" alt="">
      </div> -->

      <div class="content">
         <h3 style="font-size:55px;margin-left:460px";>الأحداث المهمة</h3>
         <p style="font-size:30px";>
         تُعتبَر الهجرة النبويّة الشريفة من أهمّ الأحداث المُتعلِّقة بالتاريخ 
         الإسلاميّ؛ فهي تمثِّل حدثاً فاصلاً بين مراحل الدعوة الإسلاميّة: المكّية، والمدنيّة، حيث أبرزَت مدى مقدرة المسلمين على الصبر، والثبات، والإخاء فيما بينهم، كما أنّها دلَّت على مدى توكُّل المسلمين على الله -تعالى-، وثقتهم بقدرته على تسيير أمور دينهم،
          ودنياهم، ومن الجدير بالذكر أنّ هجرة النبيّ -صلى الله عليه وسلّم- كانت في السابع والعشرين من شهر صفر من السنة 14 للبعثة، علماً بأنّ الصحابيّ الجليل [أبا بكر الصدّيق كان قد هاجر برفقته من مكّة المُكرَّمة إلى المدينة المُنوَّرة، ومع دخوله
          -عليه السلام- المدينة المُنوَّرة، كانت بداية إنشاء الدولة الإسلاميّة.[١] معركة بدر الكُبرى وقعت معركة بدر الكُبرى في السنة الثانية للهجرة، وتحديداً في السابع عشر من رمضان، بين المسلمين، وقريش، علماً بأنّ بداية هذه المعركة كانت عندما أراد
          النبيّ -عليه السلام- السيطرة على قافلة لقريش؛ ردّاً منه على سَلب قريش لأموال المسلمين، فاستغلَّت قريش الفرصة؛ لمواجهة المسلمين، وقتالهم عندما بلغتهم الأخبار، حيث التقى الجيشان عند منطقة آبار بدر، 
         وتقدَّم القادة؛ للمُبارزة التي قُتِل فيها قادة قريش، ممّا رفع من معنويّات المسلمين، وزاد من حماسهم؛ للقتال، وتحقَّقت بشارة النبيّ للمسلمين بالفوز العظيم، ومن الجدير بالذكر أنّه كان قد قُتِل عدد كبير من جيش المشركين، 
         وعلى رأسهم أميّة بن خلف، وأبو جهل، وعُتبة بن ربيعة. تحرير بيت المقدس جاء تحرير بيت المقدس بعد انتصار المسلمين بقيادة صلاح الدين الأيّوبي في معركة حِطّين، علماً بأنّ تحرير بيت المقدس لم يكن حرباً بمعنى الكلمة؛
          إذ إنّ المسلمين لم يواجهوا خصماً قويّاً، فقد أمّن صلاح الدين الساحل الشاميّ قبل الفتح؛ لاحتمال وجود خطر من قِبل الصليبيّين أثناء حصاره لبيت المقدس، ومن الجدير بالذكر 
         أنّ صلاح الدين ابتعد عن اللجوء إلى العنف مع أهل المدينة؛ احتراماً لقدسيّتها، وحرمتها عند المسلمين، والنصارى؛ ولذلك دعا أهلها؛ للتباحُث في شروط تسليمها له، 
         على أن يُؤمِّنهم على أولادهم، وأرواحهم، وأموالهم، إلّا أنّهم رفضوا ذلك، فكان قراره باقتحام المدينة، وفتحها بعد رفضهم المُتكرِّر؛ لتسليمها، وذلك في السابع والعشرين من رجب من عام 583 للهجرة فتح القسطنطينيّة

         </p>
         <!-- <a href="contact.php" class="btn">لاتترددوا في التواصل معنا </a> -->
      </div>

   </div>

</section>

<!-- < -->
<!-- <section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
 -->








<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>