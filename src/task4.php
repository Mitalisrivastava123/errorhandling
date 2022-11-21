<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h3> Give Error When Value is Greater then 1</h3>
    <form action = "" method="POST">
    <input type="number" name="testing" placeholder="enter value">
    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>
<?php
function customError($errorno, $errorstr) {
    echo "<b></b>  $errorstr<br>";
  }
  //set error handler
  set_error_handler("customError",E_USER_WARNING);
  //trigger error
  $testing  = $_POST["testing"];
  if ($testing>1) {
    trigger_error("<h3>Value is greater  then 1 $errorstr</h3>",E_USER_WARNING);
  }

?>


