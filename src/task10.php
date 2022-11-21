<?php
$error1  = "This is an Error";
$log_file = "./my-error.txt";
error_log($error1 ,3 ,$log_file);
?>