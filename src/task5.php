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
<form action = "" method="POST">
  <h3>Enter Your File</h3>
    <input type="text" name="file2" placeholder="enter file name">
    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>
<!-- condition if file was found it will give e user notice else it will give e user error -->
<?php 
$file2 = $_POST["file2"];

function customError($errorno, $errorstr) {
  echo "<b></b>  $errorstr<br>";

}
//set error handler
set_error_handler("customError");

if(file_exists($file2)) {
    trigger_error("<h3>file  found </h3>",E_USER_NOTICE  );
    } else {
  
      trigger_error("<h3>file Not found </h3>",E_USER_ERROR);
    }
?>