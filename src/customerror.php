<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</body>
</html>
<?php

function customError($errorno, $errorstr) {
    echo "<h3>  $errorstr </h3>";
  
  }
  //set error handler
  set_error_handler("customError");

function myErrorHandler($errorno, $errorstr, $errorfile, $errorline) {
    echo "<h3>Custom error Number [$errorno] </h3>";
    echo "<h3>Error string is $errorstr</h3>";
}


set_error_handler("myErrorHandler");

$testing=5;
if ($testing>1) {
    trigger_error("A custom error has been occured");
}
restore_error_handler();


if ($testing>1) {
    trigger_error("");
}
?>
