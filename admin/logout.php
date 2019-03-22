<?php
session_start();
unset($_SESSION['u_uname']);
session_destroy();
header("Location:../");
?>
