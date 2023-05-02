<?php
session_start();
echo '<b>Transaction In Process, Please do not reload</b>';
unset($_SESSION['cart']);
header('location:order-history.php');
?>