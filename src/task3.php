<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- form start -->
  <h3> Give Error When Value is Greater then 100</h3>
    <form action = "" method="POST">
    <input type="number" name="number" placeholder="enter value">
    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>
<!-- function customerror show error when value is greater then 100 -->
<?php

function customError($errorno, $errorstr) {
    echo "<h3>  $errorstr </h3>";
  
  }
  //set error handler function
  set_error_handler("customError");

$number = $_POST["number"];
if($number >100)
{
    trigger_error("An error has been occured value is greater then 100");
}


?>