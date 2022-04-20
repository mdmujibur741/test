<?php
         include('class/admin_back.php');
         $obj= new admin_program();

         if(isset($_POST['update'])){
            $update=$obj->trade_update($_POST);

        }


         if(isset($_GET['status'])){

           if($_GET['status']=='edit'){
                $get_id=$_GET['id'];
            $trad_dis=$obj->trade_edit($get_id);
           }

          }



?>
<?php
           include('includes/head.php');

           include('includes/nav.php');

?>

     <!-- MAIN TRADE SECTION -->
     <div class="trade">
    <div class="container-fluid m-2">

    <?php
         while($r=mysqli_fetch_assoc($trad_dis)){
    ?>

      <form action="" method="POST" class="form p-4" enctype="multipart/form-data">
        <div class="row">
           <h2 class="text-dark pb-3"> ট্রেড লাইন্সেস সংশোধন</h2>

         <input type="hidden" name="id" value="<?php echo $r['id'];   ?>">

        <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="date" class="form-label"> তারিখ:</label>
              <input type="text" class="form-control" id="date" name="u_t_date" value="<?php echo $r['t_date'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="licence_no" class="form-label"> লাইসেন্স নং:</label>
              <input type="text" class="form-control" id="licence_no" name="u_t_licence_no" value="<?php echo $r['t_licence_no'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="licence_day" class="form-label"> লাইসেন্স ইস্যুর তারিখ:</label>
                <input type="text" class="form-control" id="licence_day" name="u_t_licence_day" value="<?php echo $r['t_licence_day'];   ?>">
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="renewal_y" class="form-label"> নবায়নের অর্থ বছর: </label>
                <input type="text" class="form-control" id="renewal_y" name="u_t_renewal_y" value="<?php echo $r['t_renewal_y'];   ?>">
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="renewal_d" class="form-label"> নবায়নের তারিখ : </label>
                <input type="text" class="form-control" id="renewal_d" name="u_t_renewal_d" value="<?php echo $r['t_renewal_d'];   ?>">
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
                <label for="word" class="form-label"> ওর্য়াড নং:</label>
                  <input type="text" id="word" class="form-control" name="u_t_word" value="<?php echo $r['t_word'];?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="village" class="form-label"> গ্রাম/মহল্লা/রাস্তা:</label>
              <input type="text" class="form-control" id="village" name="u_t_village" value="<?php echo $r['t_village'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="holding" class="form-label">হোল্ডিং নং:</label>
              <input type="text" class="form-control" id="holding" name="u_t_holding" value="<?php echo $r['t_holding'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="business" class="form-label">ব্যাবসা প্রতিষ্ঠানের নাম:</label>
              <input type="text" class="form-control" id="business" name="u_t_business_name" value="<?php echo $r['t_business_name'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="business_type" class="form-label">ব্যাবসার ধরন:</label>
              <input type="text" class="form-control" id="business_type" name="u_t_business_type" value="<?php echo $r['t_business_type'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner" class="form-label">মালিকের নাম:</label>
              <input type="text" class="form-control" id="owner" name="u_t_owner" value="<?php echo $r['t_owner'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_dad" class="form-label">পিতা বা স্বামীর নাম:</label>
              <input type="text" class="form-control" id="owner_dad" name="u_t_owner_dad" value="<?php echo $r['t_owner_dad'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_mom" class="form-label">মাতার নাম:</label>
              <input type="text" class="form-control" id="owner_mom" name="u_t_owner_mom" value="<?php echo $r['t_owner_mom'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr" class="form-label">ব্যাবসা প্রতিষ্ঠানের ঠিকানা:</label>
              <input type="text" class="form-control" id="owner_adr" name="u_t_owner_adr" value="<?php echo $r['t_owner_adr'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr_pr" class="form-label">মালিকের ঠিকানা (বর্তমান):</label>
              <input type="text" class="form-control" id="owner_adr_pr" name="u_t_owner_adr_pr" value="<?php echo $r['t_owner_adr_pr'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr_permanent" class="form-label">মালিকের ঠিকানা (স্থায়ী):</label>
              <input type="text" class="form-control" id="owner_adr_permanent" name="u_t_owner_adr_perm" value="<?php echo $r['t_owner_adr_perm'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="valid" class="form-label">বৈধতার মেয়াদ কাল:</label>
              <input type="text" class="form-control" id="valid" name="u_t_valid" value="<?php echo $r['t_valid'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="nid" class="form-label">ন্যাশনাল আইডি নং(ইংরেজিতে):</label>
              <input type="number" class="form-control" id="nid" name="u_t_nid" value="<?php echo $r['t_nid'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="mobile" class="form-label">ফোন/মোবাইল নং(ইংরেজিতে):</label>
              <input type="number" class="form-control" id="mobile" name="u_t_mobile" value="<?php echo $r['t_mobile'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="trade_fee" class="form-label">ট্রেড লাইন্সেস/নবায়ন ফি (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="trade_fee" name="u_t_trade_fee" value="<?php echo $r['t_trade_fee'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="back_fee" class="form-label">বকেয়া ফি (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="back_fee" name="u_t_back_fee" value="<?php echo $r['t_back_fee'];   ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="income_tax" class="form-label">উৎসে কর (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="income_tax" name="u_t_income_tax" value="<?php echo $r['t_income_tax'];   ?>">
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="img" class="form-label">ছবি যুক্ত করুন:</label>
              <input type="file" class="form-control" id="img" name="t_img" >
               <input type="hidden" name="ol_u_t_img" value="<?php echo $r['t_img'];   ?>">
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6">
            <div class="mb-3 mt-4">
              <input type="reset" class="form-control mu_sub bg-danger" value="Reset">
            </div>
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="mb-3 mt-4">
              <input type="submit" class="form-control mu_sub" value="UPDATE" name="update">
            </div>
          </div>
        </div>
      </form>
<?php
            }
?>
    </div>
  </div>



  <?php
             include('includes/script.php');


?>