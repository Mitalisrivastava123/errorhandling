
<?php 
function customError($errorno, $errorstr) {
  echo "<b></b>  $errorstr<br>";

}
//set error handler
set_error_handler("customError");

if(file_exists("file1.php")) {
    trigger_error("<h3>file  found </h3>",E_USER_NOTICE  );
    } else {
  
      trigger_error("<h3>file Not found </h3>",E_USER_ERROR);
    }
?>