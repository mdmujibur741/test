<?php
        include('class/admin_back.php');

        $obj= new admin_program();
        $trade_data_info=$obj->display_trade();

        if(isset($_GET['id'])){
                $get_id=$_GET['id'];
                $get_img=$_GET['img'];
               $data_delete=$obj->trade_delete($get_id,$get_img);
        }



?>
         <!-- HEAD SECTION -->
              <?php include('includes/head.php')               ?>

              <!-- HEADER SECTION -->
              <?php include('includes/header.php');             ?>


              <!-- HEADER SECTION -->
              <?php include('includes/nav.php');             ?>


              <!-- TRADE DATABASE SECTION -->
              <?php  include('includes/trade_data_body.php');                                         ?>


               <!-- SCRIPT SECTION -->
              <?php include('includes/script.php');         ?>