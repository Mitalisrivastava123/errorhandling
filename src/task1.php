<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action = "" method="POST">
    <input type="text" name="files" placeholder="enter value">
    <button type="submit" name="submit">submit</button>
</form>

</body>
</html>
<?php
$file = $_POST["files"];

// if file not exists it will give file not found else it will give file found message
if(!file_exists($file)) {
    die("<h3>Your file is not found</h3>");
    } else {
      die('<h3>Your file  is found</h3>');
    }
    
    ?>
