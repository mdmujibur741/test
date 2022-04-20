<div class="inheritance">
    <div class="container-fluid">
        <form action="inheritance_form.php" method="POST" class="form p-4">
            <div class="row">
                <h2 class="text-dark">উত্তরাধিকারি সনদ ফরম</h2>

                <div class="col-md-6">
                    <div class="mb-3">
                        ওর্য়াড নং: <select name="word" class="form-select mt-2" aria-label="Default select example">
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

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="village" class="form-label"> গ্রাম:</label>
                        <input type="text" class="form-control" id="village" name="village" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="member" class="form-label">ইউ,পি সদস্য:</label>
                        <input type="text" class="form-control" id="member" name="member" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="main_man" class="form-label"> মূল ব্যাক্তি :</label>
                        <input type="text" class="form-control" id="main_man" name="main_man" required>
                    </div>
                </div>

            </div>

            <div class="row">
                <h4 class="pb-2">উত্তরাধিকারির বিবরন</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">নাম</th>
                            <th scope="col">পিতা/মাতা/স্বামীর নাম</th>
                            <th scope="col">ঠিকানা</th>
                            <th scope="col">সর্ম্পক</th>
                            <th scope="col">বয়স</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="one_name"></td>
                            <td><input type="text" class="form-control" name="one_guardian"></td>
                            <td><input type="text" class="form-control" name="one_address"></td>
                            <td><input type="text" class="form-control" name="one_relation"></td>
                            <td><input type="text" class="form-control" name="one_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="two_name"></td>
                            <td><input type="text" class="form-control" name="two_guardian"></td>
                            <td><input type="text" class="form-control" name="two_address"></td>
                            <td><input type="text" class="form-control" name="two_relation"></td>
                            <td><input type="text" class="form-control" name="two_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="three_name"></td>
                            <td><input type="text" class="form-control" name="three_guardian"></td>
                            <td><input type="text" class="form-control" name="three_address"></td>
                            <td><input type="text" class="form-control" name="three_relation"></td>
                            <td><input type="text" class="form-control" name="three_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="four_name"></td>
                            <td><input type="text" class="form-control" name="four_guardian"></td>
                            <td><input type="text" class="form-control" name="four_address"></td>
                            <td><input type="text" class="form-control" name="four_relation"></td>
                            <td><input type="text" class="form-control" name="four_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="five_name"></td>
                            <td><input type="text" class="form-control" name="five_guardian"></td>
                            <td><input type="text" class="form-control" name="five_address"></td>
                            <td><input type="text" class="form-control" name="five_relation"></td>
                            <td><input type="text" class="form-control" name="five_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="six_name"></td>
                            <td><input type="text" class="form-control" name="six_guardian"></td>
                            <td><input type="text" class="form-control" name="six_address"></td>
                            <td><input type="text" class="form-control" name="six_relation"></td>
                            <td><input type="text" class="form-control" name="six_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="seven_name"></td>
                            <td><input type="text" class="form-control" name="seven_guardian"></td>
                            <td><input type="text" class="form-control" name="seven_address"></td>
                            <td><input type="text" class="form-control" name="seven_relation"></td>
                            <td><input type="text" class="form-control" name="seven_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="eight_name"></td>
                            <td><input type="text" class="form-control" name="eight_guardian"></td>
                            <td><input type="text" class="form-control" name="eight_address"></td>
                            <td><input type="text" class="form-control" name="eight_relation"></td>
                            <td><input type="text" class="form-control" name="eight_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="nine_name"></td>
                            <td><input type="text" class="form-control" name="nine_guardian"></td>
                            <td><input type="text" class="form-control" name="nine_address"></td>
                            <td><input type="text" class="form-control" name="nine_relation"></td>
                            <td><input type="text" class="form-control" name="nine_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ten_name"></td>
                            <td><input type="text" class="form-control" name="ten_guardian"></td>
                            <td><input type="text" class="form-control" name="ten_address"></td>
                            <td><input type="text" class="form-control" name="ten_relation"></td>
                            <td><input type="text" class="form-control" name="ten_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="eleven_name"></td>
                            <td><input type="text" class="form-control" name="eleven_guardian"></td>
                            <td><input type="text" class="form-control" name="eleven_address"></td>
                            <td><input type="text" class="form-control" name="eleven_relation"></td>
                            <td><input type="text" class="form-control" name="eleven_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="twelve_name"></td>
                            <td><input type="text" class="form-control" name="twelve_guardian"></td>
                            <td><input type="text" class="form-control" name="twelve_address"></td>
                            <td><input type="text" class="form-control" name="twelve_relation"></td>
                            <td><input type="text" class="form-control" name="twelve_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="thirteen_name"></td>
                            <td><input type="text" class="form-control" name="thirteen_guardian"></td>
                            <td><input type="text" class="form-control" name="thirteen_address"></td>
                            <td><input type="text" class="form-control" name="thirteen_relation"></td>
                            <td><input type="text" class="form-control" name="thirteen_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fourteen_name"></td>
                            <td><input type="text" class="form-control" name="fourteen_guardian"></td>
                            <td><input type="text" class="form-control" name="fourteen_address"></td>
                            <td><input type="text" class="form-control" name="fourteen_relation"></td>
                            <td><input type="text" class="form-control" name="fourteen_age"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="fifteen_name"></td>
                            <td><input type="text" class="form-control" name="fifteen_guardian"></td>
                            <td><input type="text" class="form-control" name="fifteen_address"></td>
                            <td><input type="text" class="form-control" name="fifteen_relation"></td>
                            <td><input type="text" class="form-control" name="fifteen_age"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="col-6">
                    <div class="mb-3">
                            <input type="reset" class="form-control mu_sub bg-danger" value="RESET" name="submit">
                    </div>
               </div>

               <div class="col-6">
                    <div class="mb-3">
                            <input type="submit" class="form-control mu_sub" value="SUBMIT" name="submit">
                    </div>
               </div>

            </div>
        </form>
    </div>
</div>