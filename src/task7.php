
<?php

function customError($errorno, $errorstr,$errorfile,$errorline) {
    echo "<h3>  $errorstr </h3>";
  
  }
  //set error handler
  set_error_handler("customError");

function myErrorHandler($errorno, $errorstr, $errorfile, $errorline) {
    echo " <h3>Error on line $errorline </h3>";
    echo "<h3>Error on file $errorfile</h3>";
 
}
set_error_handler("myErrorHandler");

echo fopen("file1.txt","r");

?>