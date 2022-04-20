
<div class="citizen">
        <div class="container pt-5">
            <form action="citizen_form.php" method="POST" class="form">
                <div class="row">

                  <h2 class="text-dark pb-3">নাগরিকত্ব আবেদন</h2>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">নাম</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="father" class="form-label">পিতার নাম</label>
                            <input type="text" class="form-control" id="father" name="father" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                       <div class="mb-3">
                            <label for="mother" class="form-label">মাতার নাম</label>
                            <input type="text" class="form-control" id="mother" name="mother">
                        </div>  
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="village" class="form-label">গ্রাম</label>
                            <input type="text" class="form-control" id="village" name="village" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                         <div class="mb-3">
                            <label for="post_office" class="form-label">ডাকঘর</label>
                            <input type="text" class="form-control" id="post_office" name="post_office">
                        </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="mb-3">
                            <label for="word_no" class="form-label">ওয়ার্ড নং</label>
                            <input type="text" class="form-control" id="word_no" name="word_no" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="date" class="form-label">তারিখ</label>
                            <input type="text" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-2">
                    <input type="submit" class="form-control mu_sub mt-4" value="SUBMIT" name="submit">
                    </div>

                </div>
            </form>
        </div>
    </div>