<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'more.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      .ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


body {
  background-color: #000;
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 50px 0;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #121212;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}
</style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="قراء.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
         نادي القراء
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="مبدعة الحروف.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
مبدعة الحروف
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="الأفكار.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        فارسة الأفكار        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="لهمة الصفحات.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        ملهمة الصفحات
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="عاشقة السفر الورق.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        عاشقة السفر الورقي
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            30.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="الحكايات.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        لمعة الحكايات
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="ائدة الكتب.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg">
        </div>
        <div class="ag-courses-item_title">
        رائدة الكتب
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="عيم الكتابة.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        نعيم الكتابة
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start:
          <span class="ag-courses-item_date">
            31.10.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="من قلب الصفحا.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        من قلب الصفحات
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>
    <div class="ag-courses_item">
      <a href="لاذ القرَّاء.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        ملاذ القرَّاء
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            04.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="مؤتمر القرَّا.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        مؤتمر القرَّاء
        </div>

        <div class="ag-courses-item_date-box">
          <!-- Start: -->
          <!-- <span class="ag-courses-item_date">
            30.11.2022
          </span> -->
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="أرض الكتب.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
        أرض الكتب
        </div>
      </a>
    </div>


  </div>
</div>  
<!-- <section class="form-container">

   <form action="" method="post">
      <h3>تسجيل دخول </h3>
      <input type="email" name="email" required placeholder="ايميلك" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder=" كلمة السر الخاصة بك" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="سجل الان" class="btn" name="submit">
      <p> لا تمتلك حساب؟ </p><a href="user_register.php" class="option-btn">انشاء حساب الان</a>
      
   </form>

</section> -->







 





<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>