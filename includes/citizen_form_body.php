
    
    <!-- PRINT BUTTON -->
      <div class="container">
        <div class="row">
            <button class="btn pri_d d-print-none" onclick="window-print();">Print</button>
        </div>
     </div>




    <div class="citizen_form">
        <div class="">
        <div class="container-fluid bg_img_cit">
            <div class="row">
                <div class="col-2">
                       <img src="asset/img/logo.png" class="rounded-circle" alt="" width="95px">
                </div>
                <div class="col-8 text-center">
                    <span> গণপ্রজাতন্ত্রী বাংলাদেশ সরকার
                    কার্যালয়</span>
                    <h3 class="text-center">১১নং মোস্তফাপুর ইউনিয়ন পরিষদ</h3>
                        <p>ডাক: জগৎসী, উপজেলা ও জেলা: মৌলভীবাজার, বাংলাদেশ</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <span class="head">নাগরিকত্ব সনদপত্র</span>
                </div>
                <div class="col-12">
                    ক্রমিক নং-
                </div>
                <div class="col text-end pe-5 me-5">
                    তারিখ:<?php  echo $_POST['date'];      ?>
                </div>
            </div>
            <div class="row">
                <p class="sonod_body">
                    ত্রতদ্বারা প্রত্যায়ন করা যাইতেছে যে,<?php  echo $_POST['name'];      ?>, 
                    পিতা/স্বামী : <?php  echo $_POST['father'];      ?>,
                    মাতা:  <?php  echo $_POST['mother'];      ?>,
                    গ্রাম:  <?php  echo $_POST['village'];      ?>,
                    ওয়ার্ড নং: <?php  echo $_POST['word_no'];      ?> নং,  ডাকঘর: <?php  echo $_POST['post_office'];      ?> উপজেলা ও জেলা: মৌলভীবাজার । 
                    অত্র ইউনিয়নের স্থায়ী বাসিন্দা ত্রবং বাংলাদেশের নাগরিক । 
                    আমি তাহার উজ্জল ভবিষ্যৎ কামনা করি ।

                </p>
            </div>
            <div class="row citi_footer">
                 <div class="col-6">
                       <p>
                            * নিয়মিত ইউনিয়ন কর পরিশোধ করুন । <br>
                            * আপনার ছেলে-মেয়েকে স্কুলে পাঠান ।
                       </p>
                 </div>
                 <div class="col-6 text-center">
                     <p>চেয়ারম্যান</p>
                 </div>
            </div>
        </div>
        </div>
    </div>
