<?php
session_start();
session_destroy();
header('location: vue/vue_login.php');
exit;
?>
