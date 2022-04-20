<?php
          include('class/admin_back.php');

        if(isset($_POST['submit'])){

            $obj= new admin_program();
           $tarde_info = $obj->trade_insert($_POST);

        }


 ?>


 <!-- HEAD SECTION -->
 <?php include('includes/head.php');           ?>


 <!-- HEADER SECTION -->
 <?php include('includes/header.php');           ?>

 <!-- NAV SECTION -->
 <?php include('includes/nav.php');              ?>


 <!-- TRADE BODY SECTION -->
 <?php include('includes/trade_body.php');        ?>


 <!-- SCRIPT SECTION -->
 <?php include('includes/script.php');            ?>