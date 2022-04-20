

     <!-- MAIN TRADE SECTION -->
          <div class="trade">
    <div class="container-fluid m-2">
    <?php
          if(isset($tarde_info)){
                  echo "$tarde_info";
          }
    ?>
      <form action="" method="POST" class="form p-4" enctype="multipart/form-data">
        <div class="row">
           <h2 class="text-dark pb-3"> ট্রেড লাইন্সেস আবেদন </h2>
        <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="date" class="form-label"> তারিখ:</label>
              <input type="text" class="form-control" id="date" name="t_date" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="licence_no" class="form-label"> লাইসেন্স নং:</label>
              <input type="text" class="form-control" id="licence_no" name="t_licence_no" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="licence_day" class="form-label"> লাইসেন্স ইস্যুর তারিখ:</label>
                <input type="text" class="form-control" id="licence_day" name="t_licence_day" required>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="renewal_y" class="form-label"> নবায়নের অর্থ বছর: </label>
                <input type="text" class="form-control" id="renewal_y" name="t_renewal_y" required>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="mb-3">
                <label for="renewal_d" class="form-label"> নবায়নের তারিখ : </label>
                <input type="text" class="form-control" id="renewal_d" name="t_renewal_d" required>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              ওর্য়াড নং: <select name="t_word" class="form-select mt-2" aria-label="Default select example">
                <option selected>Open this select</option>
                <option value="১">১</option>
                <option value="২">২</option>
                <option value="৩">৩</option>
                <option value="৪">৪</option>
                <option value="৫">৫</option>
                <option value="৬">৬</option>
                <option value="৭">৭</option>
                <option value="৮">৮</option>
                <option value="৯">৯</option>
              </select>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="village" class="form-label"> গ্রাম/মহল্লা/রাস্তা:</label>
              <input type="text" class="form-control" id="village" name="t_village" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="holding" class="form-label">হোল্ডিং নং:</label>
              <input type="text" class="form-control" id="holding" name="t_holding" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="business" class="form-label">ব্যাবসা প্রতিষ্ঠানের নাম:</label>
              <input type="text" class="form-control" id="business" name="t_business_name" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="business_type" class="form-label">ব্যাবসার ধরন:</label>
              <input type="text" class="form-control" id="business_type" name="t_business_type" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner" class="form-label">মালিকের নাম:</label>
              <input type="text" class="form-control" id="owner" name="t_owner" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_dad" class="form-label">পিতা বা স্বামীর নাম:</label>
              <input type="text" class="form-control" id="owner_dad" name="t_owner_dad" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_mom" class="form-label">মাতার নাম:</label>
              <input type="text" class="form-control" id="owner_mom" name="t_owner_mom" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr" class="form-label">ব্যাবসা প্রতিষ্ঠানের ঠিকানা:</label>
              <input type="text" class="form-control" id="owner_adr" name="t_owner_adr" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr_pr" class="form-label">মালিকের ঠিকানা (বর্তমান):</label>
              <input type="text" class="form-control" id="owner_adr_pr" name="t_owner_adr_pr" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="owner_adr_permanent" class="form-label">মালিকের ঠিকানা (স্থায়ী):</label>
              <input type="text" class="form-control" id="owner_adr_permanent" name="t_owner_adr_perm" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="valid" class="form-label">বৈধতার মেয়াদ কাল:</label>
              <input type="text" class="form-control" id="valid" name="t_valid" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="nid" class="form-label">ন্যাশনাল আইডি নং(ইংরেজিতে):</label>
              <input type="number" class="form-control" id="nid" name="t_nid" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="mobile" class="form-label">ফোন/মোবাইল নং(ইংরেজিতে):</label>
              <input type="number" class="form-control" id="mobile" name="t_mobile" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="trade_fee" class="form-label">ট্রেড লাইন্সেস/নবায়ন ফি (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="trade_fee" name="t_trade_fee" required>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="back_fee" class="form-label">বকেয়া ফি (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="back_fee" name="t_back_fee">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="income_tax" class="form-label">উৎসে কর (ইংরেজিতে):</label>
              <input type="text" class="form-control" id="income_tax" name="t_income_tax">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <label for="img" class="form-label">ছবি যুক্ত করুন:</label>
              <input type="file" class="form-control" id="img" name="t_img">
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-3 mt-4">
              <input type="reset" class="form-control mu_sub bg-danger" value="Reset" name="submit">
            </div>
          </div>


          <div class="col-lg-4 col-md-6">
            <div class="mb-3 mt-4">
              <input type="submit" class="form-control mu_sub" value="SUBMIT" name="submit">
            </div>
          </div>




        </div>
      </form>
    </div>
  </div>