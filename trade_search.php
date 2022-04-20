<?php

include('class/admin_back.php');

$obj = new admin_program();
$trade_data_info = $obj->display_trade();

if (isset($_GET['id'])) {
    $get_id = $_GET['id'];
    $get_img = $_GET['img'];
    $obj->trade_delete($get_id, $get_img);
}

  if(isset($_POST['search'])){
     $result=$obj->trade_data_search($_POST);
  }

?>

<!-- HEAD SECTION -->
<?php include('includes/head.php');    ?>

<!-- HEADER SECTION -->
<?php include('includes/header.php');  ?>

<!-- nav SECTION -->
<?php include('includes/nav.php');  ?>

<!---------------------- TARDE SEARCH MAIN BODY SECTION ----------------->
<?php    include('includes/trade_search_body.php');    ?>

<!-- SCRIPT SECTION -->
<?php include('includes/script.php');  ?>