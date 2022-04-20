<?php
               include('class/admin_back.php');

               if(isset($_GET['id'])){
                       $get_id=$_GET['id'];

                       $obj= new admin_program();
                     $form_info=$obj->trade_form($get_id);
               }



?>
                    <!-- HEAD SECTION START-->
                       <?php include('includes/head.php');                         ?>


                       <!-- HEADER SECTION START-->
                       <?php include('includes/header.php');                    ?>


                       <!--NAV SHOWER SECTION -->
                       <?php include('includes/nav.php');                 ?>

                       <!-- TRADE FORM MAIN BODY -->
                       <?php include('includes/trade_form_body.php');              ?>


                       <!--SCRIPT SECTION -->
                       <?php include('includes/script.php');     ?>