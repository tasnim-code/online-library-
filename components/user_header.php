<?php
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
         <div id="user-btn" class="fas fa-sync-alt fa-spin"></div>

         <!-- <a href="search_page.php"><i class="fas fa-search"></i></a> -->
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

      <nav class="navbar" style="text-align: center;width:72%";>
      
      &nbsp;<span><a href="mm.php">ملخص المشروع</a><img src="images/ro.png" alt="" style="width:3.5%;height:4%";> </span>
      &nbsp; <span><a href="ro.php"> الرؤية</a><img src="images/message.png" alt="" style="width:4%;height:4%";> </span>
      &nbsp; <span><a href="message.php"> الرسالة </a> <img src="images/hh.png" alt="" style="width:4%;height:4%";> </span>
      &nbsp;<span><a href="hh.php"> الأهداف </a> <img src="images/qq.png" alt="" style="width:4%;height:4%";> </span>
      <span><a href="qq.php"> القيم</a><img src="images/ma.png" alt="" style="width:4%;height:4%";> </span>

         <!-- <a href="events.php"> الأهداف </a>
         <a href="about.php"> القيم</a> -->
         <!-- <a href="contact.php"> القيم</a> -->
         <!-- <a href="about.php"> مسابقاتنا </a> -->
       
      </nav>
      <!-- <div style="width:20%;height:10%; items-align:center";> -->
         
         <a href="index.php" class="logo" style="color: white";> القراءة أسرار و أنوار</a>
         <!-- <div class="image">
               <img src="images/1.png" alt="" style="width:10%;height:10%";>
         </div>
      </div> -->

   </section>

</header>