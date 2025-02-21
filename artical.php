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
   <title>ملخص المشروع</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'more.php'; ?>

<section class="about" style="align-items: right";>

<br><br><br><br>
<div class="row">
      <!-- <div class="image">
         <img src="images/ma.png" alt="">
      </div> -->

      <div class="content">
         <h3 style="font-size:55px;margin-left:460px";>المقال الأول</h3>
         <p style="font-size:30px";> بسم الله الرحمن الرحيم

الحمد لله والصلاة والسلام على رسول الله وبعد: 

 

التسلح بالعلم والثقافة:

لازلنا نتحدث عن الشباب وأهمية الشباب ودور الشباب في الإسلام، وفي الخطبة الماضية تحدثنا عن واجبات الشباب وذكرنا سبعة واجبات على الشباب وبقي هناك واجبات ثلاثة، الواجب الثامن بعد السبعة الماضية أن يتسلح بالعلم والثقافة، أن يتفوق في اختصاصه، أن يبذل جهده في طلب العلم ، نحن للأسف موسومون بأننا من العالم المتخلف الذي يسمونه العالم الثالث، وبعض بلاد المسلمين لو كان هناك عالم رابع لنسب إليه، لازالت الأمية تسود في كثير من بلاد الإسلام، ولازال بعض الناس يعتقدون أن سبب تخلف المسلمين هو الإسلام، وهذا غير صحيح بالمرة، فيوم كان المسلمون مسلمين ويوم كان الإسلام إسلاماً كانوا المسلمين هم الأمة الأولى، والعالم الأول في هذه الدنيا، قادت حضارتهم العالم حوالي عشرة قرون كان المسلمون فيها هم السادة والرادة والقادة، وكان العالم يتعلم على أيديهم، ويتعلم في مدارسهم وجامعاتهم، وكانت اللغة العربية هي لغة العلم ، ومن يريد من أبناء أوروبا أن يظهر أنه إنسان مثقف أو متقدم تكلم بعض ألفاظ بالعربية، كما يفعل كثيرون الآن حينما يكلِّمونك فيدخلون في كلامهم كلمات بالإنجليزية أو بالفرنسية ليشعروك أنهم من أهل التقدم والحضارة، هكذا كنا وينبغي أن نعود إلى ما كنا عليه، ولا يكون هذا إلا إذا أتقنَّا العلم وتفوقنا فيه، ليس علم الشريعة وحده، كل علم في هذه الدنيا ، يجب أن نرقى في كل فنون العلم ، في الفيزياء، في الكيمياء، في الأحياء، في الرياضيات، في الطب، في الفلك، في التشريح، في علوم الذرة، ينبغي أن يكون لنا نصيب منها، ولا نكون عالة على غيرنا كما هو شأننا اليوم، نحن لسنا أغبياء، فينا النوابغ، وفينا العباقرة في كل ناحية من نواحي الحياة، ولكن نرجو من أبناءنا أن يبذلوا الجهد في طلب العلم، أسلافنا قالوا: "إن العلم لا يعطيك بعضه حتى تعطيه كلك"، أن تعطي العلم كل جهدك وكل همك وكل وقتك وكل فكرك، وهو يعطيك بعض ما عنده، لأن العلم بحر لا ساحل له، ولا قرار له، وصدق الله العظيم إذ يقول (وما أوتيتم من العلم إلا قليلاً)، فنحن في دائرة هذا القليل نتنافس، ونسعى ونكدح ونجاهد وهذا هو واجبنا، نوصي الشباب أن يتسلح بالعلم، بعض الشبابأرسلوا لي منذ سنوات، كان بعضهم متفوقاً في علم الدنيا، طالب تفوق في كلية الهندسة،<br> وكان ناجحاً بامتياز وهو أول دفعته، ومع هذا أرسل إليّ يقول: إني أريد أن أترك الهندسة لأتعلم الشريعة ، هذا خطأ في التفكير، إن تفوقه في الهندسة بحيث ينفع وطنه وأمته، حيث ينتزع القيادة من غير المسلمين، وغير المتدينين وغير المؤمنين، هذا تعبٌّد لله تبارك و-تعالى-، يستطيع كل إنسان أن يتعبَّد إلى ربه فيما يُسَّر له من عمل، يستطيع طالب الطب وطالب الهندسة، وطالب الفيزياء وطالب الكيمياء، وطالب الفلك وطالب الذرة أن يخدم دينه وأن يتقرب إلى ربه بإتقان ما تخصص فيه، ليس العلم الشرعي وحده هو الذي يقرِّب الإنسان من الله، قد يدرس الإنسان علم الشرع وهو بعيد عن الله، وقد يدرس الإنسان علم الشرع فيستخدمه في اتِّباع الأهواء، أهواء النفس أو أهواء الغير، إرضاء السلاطين والحكام تارة، <أو إرضاء <br>العوام والجماهير تارة أخرى، بذلك يكون العلم وبالاً عليه، هذا هو العلم الذي لا ينفع، يجب على الشاب المسلم أن يتقن العلم الذي هيَّأه الله له، ويسَّر له سبيله، وأن يعتبر ذلك لوناً من الجهاد في سبيل الله، والتعبٌّد لله - عز وجل -، هذا هو الواجب الثامن.

 

التسلح بالثقة والأمل:

الواجب التاسع أن يتسلح بالثقة والأمل، الثقة بنفسه والأمل في ربه، الثقة بيومه واليقين بغده، لا ييأس ولا يقنط ولا يملّ كما يملّ الكثيرون في عصرنا، لابد أن يدأب لا يعتريه كلل ولا ملل، وهو موقن بأن غده أفضل من يومه، وأن يومه أفضل من أمسه، هكذا ينبغي أن يكون المسلم. مما نعانيه في عصرنا موجة اليأس والقنوط التي تعتري كثيراً من الشباب، حيث يقول لك: لا فائدة لا يمكن لهذه الأمة أن تتقدم، ولا يمكن لحالها أن يصلح، ولا يمكن لكذا ولا كذا، هذا اليأس قاتل وليس من شيمة المسلم، اليأس من لوازم الكفر، والقنوط من مظاهر الضلال كما قال الله تبارك و-تعالى- (إنه لا ييأس من روح الله إلا القوم الكافرون) كما قال عن لسان إبراهيم (قال ومن يقنط من رحمة ربه إلا الضالون) لا يأس ولا قنوط، الأمل دائماً كما كان رسول الله -صلى الله عليه وسلم- يدعو في مكة في فجر الدعوة والمسلمون قليل مستضعفون في الأرض يخافون أن يتخطفهم الناس، والبلاء يُصَب عليهم من كل جانب، وسياط العذاب تنـزل عليهم من هنا وهناك، ومع هذا كان واثقاً بالنصر، واثقاً بأن هذه الدعوة سترتفع رايتها وتعلو كلمتها، كان يدعو الناس يمرٌّوا في مواسم الحج يج ويعِدُهم إذا دخلوا في دينه أن يرثوا ممالك كسرى وقيصر، فيقول له الناس: كسرى بن هرمز!! فيقول: نعم كسرى بن هرمز.
         </p>
         <!-- <a href="contact.php" class="btn">لاتترددوا في التواصل معنا </a> -->
      </div>


</div>

</section>

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