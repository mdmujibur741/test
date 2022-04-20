<div class="trad_data">

    <div class="container-fluid">
        <div class="row">

            <h2 class="p-3 text-dark"> ট্রেড লাইসেন্স ডাটাবেস </h2>
            <p><?php
                if (isset($msg)) {
                    echo $msg;
                }

                ?></p>
        </div>


        <div class="row">
<p>
<?php
           if(isset($data_delete)){ echo $data_delete; }
?>
</p>
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
                    $serial = 0;
                    while ($r = mysqli_fetch_assoc($trade_data_info)) {
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
                                <a href="?id=<?php echo $id;  ?>&&img=<?php echo $r['t_img'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php        }               ?>

                </tbody>
            </table>
        </div>
    </div>

</div>