 <!-- PRINT BUTTON -->
 <div class="container">
   <div class="row">
     <button class="btn pri_d d-print-none" onclick="window-print();">Print</button>
   </div>
 </div>



 <div class="trade_form">
   <div class="bg_img">
     <div class="container-fluid">
       <div class="row">

         <div class="col-2">
           <img src="asset/img/logo.png" alt="" width="80px">
         </div>

         <div class="col-8">
           <h2>১১ নং মোস্তফাপুর ইউনিয়ন পরিষদ</h2>
           <h4> ডাক: জগৎসী, উপজেলা ও জেলা: মৌলভীবাজার । </h4>
           <h6> Email: mostafapuru11@gmail.com </h6>
           <h5> ট্রেড/প্রফেশন লাইন্সেস</h5>
         </div>
         <div class="col-2">
           <img src="asset/img/flag.png" alt="" width="80px">
         </div>
       </div>
       <?php
        while ($r = mysqli_fetch_assoc($form_info)) {


          // total amount, vat

          $trade_fee = $r['t_trade_fee'];
          $back_fee = $r['t_back_fee'];
          $income_tax = $r['t_income_tax'];

          $tr_back = $trade_fee + $back_fee;
          $vat_one = $tr_back * 15;
          $vat = $vat_one / 100;
          $total = $trade_fee + $back_fee + $income_tax + $vat;

          $total = $trade_fee + $back_fee + $income_tax + $vat;

        ?>
         <div class="row tab mt-1">
           <div class="col-8">
             <div class="property mt-2">
               তারিখ: <?php echo $r['t_date'];           ?>
             </div>

             <div class="property">
               ওর্য়াড নং: <?php echo $r['t_word'];           ?>
             </div>

             <div class="property">
               গ্রাম/মহল্লা/রাস্তা: <?php echo $r['t_village'];           ?>
             </div>

             <div class="property">
               হোল্ডিং নং: <?php echo $r['t_holding'];           ?>
             </div>

             <div class="property">
               লাইসেন্স ইস্যুর তারিখ: <?php echo $r['t_licence_day'];           ?>
             </div>

             <div class="property">
               নবায়নের অর্থ বছর: <?php echo $r['t_renewal_y'];           ?>
             </div>

             <div class="property">
               নবায়নের তারিখ : <?php echo $r['t_renewal_d'];           ?>
             </div>
           </div>

           <div class="col-4">
             <div class="property text-end p-1">
               <img src="upload/<?php echo $r['t_img'];  ?>" height="100px" alt="">
             </div>
           </div>
         </div>
         
       <div class="row">
         <p class="para">
           ইউনিয়ন পরিষদ আইন [১২(১)নং বিধান দ্রষ্টব্য] ৭নং ফরম অনুসারে (ট্রেড, প্রফেশন ও বিজ্ঞাপন) ব্যবসা/পেশার অনুমোদন পএ
           নিম্নে বর্নিত ব্যাক্তি/প্রতিষ্ঠানের অনুকূলে দেওয়া হইল । যাহার মেয়াদ <?php echo $r['t_valid'];      ?> ইং সনের ৩০ জুন পর্যন্ত বলবৎ
           থাকবে ।
         </p>
       </div>
       <div class="row">
         <div class="property">
           ১। ব্যাবসা প্রতিষ্ঠানের নাম : <?php echo $r['t_business_name'];           ?>
         </div>

         <div class="property">
           ২। ব্যাবসার ধরন : <?php echo $r['t_business_type'];           ?>
         </div>

         <div class="property">
           ৩। মালিকের নাম : <?php echo $r['t_owner'];           ?>
         </div>

         <div class="property">
           ৪। পিতা বা স্বামীর নাম : <?php echo $r['t_owner_dad'];           ?>
         </div>

         <div class="property">
           ৫। মাতার নাম : <?php echo $r['t_owner_mom'];           ?>
         </div>

         <div class="property">
           ৬। ব্যাবসা প্রতিষ্ঠানের ঠিকানা : <?php echo $r['t_owner_adr'];           ?>
         </div>

         <div class="property">
           ৭। মালিকের ঠিকানা (বর্তমান): <?php echo $r['t_owner_adr_pr'];           ?>
         </div>

         <div class="property">
           ৮। মালিকের ঠিকানা (স্থায়ী) : <?php echo $r['t_owner_adr_perm'];           ?>
         </div>

         <div class="property">
           ৯। ন্যাশনাল আইডি নং : <?php echo $r['t_nid'];           ?>
         </div>

         <div class="property">
           ১০। ফোন/মোবাইল নং : <?php echo $r['t_mobile'];           ?>
         </div>

       </div>
  
  
       <div class="row pt-3">
         <table class="table">
           <thead>
             <tr>
               <th scope="col">আদায়ের বিবরন</th>
               <th scope="col">টাকা</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>ট্রেড লাইন্সেস/নবায়ন ফি</td>
               <td><?php echo $trade_fee . ".00 Taka ";    ?></td>
             </tr>
             <tr>
               <td>বকেয়া ফি</td>
               <td><?php echo $back_fee . ".00 Taka";    ?></td>
             </tr>
             <tr>
               <td>ভ্যাট</td>
               <td><?php echo (int)$vat . ".00 Taka";   ?></td>
             </tr>
             <tr>
               <td>উৎসে কর</td>
               <td><?php echo $income_tax . ".00 Taka";    ?></td>
             </tr>
             <tr>
               <td>মোট</td>
               <td><?php echo (int)$total . ".00 Taka";  ?></td>
             </tr>
           </tbody>
         </table>
       </div>
       <div class="row mb-0">
         <div class="col-4 ">
           ইউ.পি সচিব
         </div>
         <div class="col-4">

         </div>
         <div class="col-4">
           চেয়ারম্যান
         </div>
       </div>
       </div>



   </div>
 </div>

 <?php

        }

  ?>