<div class="trad_data">
    <div class="container-fluid">
        <div class="row p-1">

            <!----------------------- SEARCH FORM START -------------------------->
            <div class="col-lg-3 col-md-4 col-sm-12 bg-info rounded py-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="owner">মালিকের নাম</label>
                        <input type="text" name="owner" id="owner" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="owner_dad">মালিকের পিতার নাম</label>
                        <input type="text" name="owner_dad" id="owner_dad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="business_name">ব্যাবসা প্রতিষ্ঠানের নাম</label>
                        <input type="text" name="business_name" id="business_name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <center>
                            <input type="submit" name="search" value="SEARCH" class="btn btn-light btn-lg">
                        </center>
                    </div>
                </form>

            </div>

            <!-------------------------- SEARCH FORM END ------------------->



            <!------------------------- DATABASE TABLE START --------------------->
            <div class="col-lg-9 col-md-8 col-sm-12">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col"> ক্রমিক নং </th>
                            <th scope="col"> নাম</th>
                            <th scope="col"> লাইসেন্স নং</th>
                            <th scope="col"> পিতা/ স্বামী</th>
                            <th scope="col"> ছবি</th>
                            <th scope="col"> সনদ</th>
                            <th scope="col"> একশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($result)) {
                            $serial = 0;
                            while ($r = mysqli_fetch_assoc($result)) {
                                $serial++;
                                $id = $r['id'];


                        ?>
                                <tr>
                                    <td><?php echo $serial;   ?></td>
                                    <td><?php echo $r['t_owner'];   ?></td>
                                    <td><?php echo $r['t_licence_no'];   ?></td>
                                    <td><?php echo $r['t_owner_dad'];   ?></td>
                                    <td><img src="upload/<?php echo $r['t_img'];  ?>" height="50px" alt=""></td>
                                    <td><a href="trade_form.php?id=<?php echo $id;   ?>" class="nav-link">সনদ</a></td>
                                    <td class="text-center">
                                        <a href="edit_trade.php?status=edit&&id=<?php echo $id;  ?>" class="btn btn-light">Edit</a>
                                        <a href="?id=<?php echo $id; ?>&&img=<?php echo $r['t_img'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                        <?php       }
                        }   ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>