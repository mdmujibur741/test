 <!-- PRINT BUTTON -->
 <div class="container">
   <div class="row">
     <button class="btn pri_d d-print-none" onclick="window-print();">Print</button>
   </div>
 </div>


 <div class="inheritance_form">
   <div class="container-fluid">

     <div class="row inh_inch">
       <p class="inheri_body">
         এতদ্বারা প্রত্যায়ন করা যাইতেছে যে, মৌলভীবাজার জেলার সদর উপজেলাধীন ১১নং মোস্তফাপুর ইউনিয়নের অন্তর্গত <?php echo $_POST['word'];    ?> নং
         ত্তয়ার্ডের <?php echo $_POST['village'];    ?> গ্রামের এর
         পুএ/কন্যা/স্বামী <?php echo $_POST['main_man'];    ?> এর মৃত্যুকালীন সময় তাহার ত্যাজ্য বিত্তে নিম্নবর্ণিত উত্তরাধিকারীগণ
         রাখিয়া গিয়াছেন । যাহা ইউ, পি সদস্য <?php echo $_POST['member'];  ?> এর বর্ণনামতে প্রদত্ত হইল ।
       </p>
     </div>
     <div class="row">
       <h3>উত্তরাধিকারীর বিবরণ</h3>
       <table class="table">
         <thead>
           <tr>
             <th scope="col">ক্রমিক নং</th>
             <th scope="col">নাম</th>
             <th scope="col">পিতা/মাতা</th>
             <th scope="col">ঠিকানা</th>
             <th scope="col">সর্ম্পক</th>
             <th scope="col">বয়স</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>১</td>
             <td> <?php if (isset($_POST['one_name'])) {
                    echo $_POST['one_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['one_guardian'])) {
                    echo $_POST['one_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['one_address'])) {
                    echo $_POST['one_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['one_relation'])) {
                    echo $_POST['one_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['one_age'])) {
                    echo $_POST['one_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>২</td>
             <td> <?php if (isset($_POST['two_name'])) {
                    echo $_POST['two_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['two_guardian'])) {
                    echo $_POST['two_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['two_address'])) {
                    echo $_POST['two_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['two_relation'])) {
                    echo $_POST['two_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['two_age'])) {
                    echo $_POST['two_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৩</td>
             <td> <?php if (isset($_POST['three_name'])) {
                    echo $_POST['three_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['three_guardian'])) {
                    echo $_POST['three_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['three_address'])) {
                    echo $_POST['three_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['three_relation'])) {
                    echo $_POST['three_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['three_age'])) {
                    echo $_POST['three_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৪</td>
             <td> <?php if (isset($_POST['four_name'])) {
                    echo $_POST['four_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['four_guardian'])) {
                    echo $_POST['four_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['four_address'])) {
                    echo $_POST['four_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['four_relation'])) {
                    echo $_POST['four_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['four_age'])) {
                    echo $_POST['four_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৫</td>
             <td> <?php if (isset($_POST['five_name'])) {
                    echo $_POST['five_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['five_guardian'])) {
                    echo $_POST['five_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['five_address'])) {
                    echo $_POST['five_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['five_age'])) {
                    echo $_POST['five_age'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['five_age'])) {
                    echo $_POST['five_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৬</td>
             <td> <?php if (isset($_POST['six_name'])) {
                    echo $_POST['six_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['six_guardian'])) {
                    echo $_POST['six_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['six_address'])) {
                    echo $_POST['six_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['six_relation'])) {
                    echo $_POST['six_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['six_age'])) {
                    echo $_POST['six_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৭</td>
             <td> <?php if (isset($_POST['seven_name'])) {
                    echo $_POST['seven_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['seven_guardian'])) {
                    echo $_POST['seven_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['seven_address'])) {
                    echo $_POST['seven_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['seven_relation'])) {
                    echo $_POST['seven_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['seven_age'])) {
                    echo $_POST['seven_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৮</td>
             <td> <?php if (isset($_POST['eight_name'])) {
                    echo $_POST['eight_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eight_guardian'])) {
                    echo $_POST['eight_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eight_address'])) {
                    echo $_POST['eight_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eight_relation'])) {
                    echo $_POST['eight_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eight_age'])) {
                    echo $_POST['eight_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>৯</td>
             <td> <?php if (isset($_POST['nine_name'])) {
                    echo $_POST['nine_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['nine_guardian'])) {
                    echo $_POST['nine_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['nine_address'])) {
                    echo $_POST['nine_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['nine_relation'])) {
                    echo $_POST['nine_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['nine_age'])) {
                    echo $_POST['nine_age'];
                  }     ?></td>
           </tr>
           <tr>
             <td>১০</td>
             <td> <?php if (isset($_POST['ten_name'])) {
                    echo $_POST['ten_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['ten_guardian'])) {
                    echo $_POST['ten_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['ten_address'])) {
                    echo $_POST['ten_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['ten_relation'])) {
                    echo $_POST['ten_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['ten_age'])) {
                    echo $_POST['ten_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>১১</td>
             <td> <?php if (isset($_POST['eleven_name'])) {
                    echo $_POST['eleven_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eleven_guardian'])) {
                    echo $_POST['eleven_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eleven_address'])) {
                    echo $_POST['eleven_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eleven_relation'])) {
                    echo $_POST['eleven_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['eleven_age'])) {
                    echo $_POST['eleven_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>১২</td>
             <td> <?php if (isset($_POST['twelve_name'])) {
                    echo $_POST['twelve_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['twelve_guardian'])) {
                    echo $_POST['twelve_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['twelve_address'])) {
                    echo $_POST['twelve_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['twelve_relation'])) {
                    echo $_POST['twelve_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['twelve_age'])) {
                    echo $_POST['twelve_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>১৩</td>
             <td> <?php if (isset($_POST['thirteen_name'])) {
                    echo $_POST['thirteen_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['thirteen_guardian'])) {
                    echo $_POST['thirteen_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['thirteen_address'])) {
                    echo $_POST['thirteen_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['thirteen_relation'])) {
                    echo $_POST['thirteen_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['thirteen_age'])) {
                    echo $_POST['thirteen_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>১৪</td>
             <td> <?php if (isset($_POST['fourteen_name'])) {
                    echo $_POST['fourteen_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fourteen_guardian'])) {
                    echo $_POST['fourteen_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fourteen_address'])) {
                    echo $_POST['fourteen_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fourteen_relation'])) {
                    echo $_POST['fourteen_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fourteen_age'])) {
                    echo $_POST['fourteen_age'];
                  }     ?> </td>
           </tr>
           <tr>
             <td>১৫</td>
             <td> <?php if (isset($_POST['fifteen_name'])) {
                    echo $_POST['fifteen_name'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fifteen_guardian'])) {
                    echo $_POST['fifteen_guardian'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fifteen_address'])) {
                    echo $_POST['fifteen_address'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fifteen_relation'])) {
                    echo $_POST['fifteen_relation'];
                  }     ?> </td>
             <td> <?php if (isset($_POST['fifteen_age'])) {
                    echo $_POST['fifteen_age'];
                  }     ?> </td>
           </tr>
         </tbody>
       </table>
       <p class="inheri_body">
         উল্লেখিত উত্তরাধিকারী ব্যাতিত মৃত.............এর আর কোনো উত্তরাধিকারী নাই ।
       </p>
     </div>
   </div>
 </div>