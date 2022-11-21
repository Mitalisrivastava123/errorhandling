>
<?php
echo $var; 
 $error_info = error_get_last();
    
  print_r($error_info);
  echo "<br>";
 print_r ("<h3>" .$error_info['type']. "</h3>");

  print_r ("<h3>". $error_info['message']. "</h3");
  echo "<br>";

  print_r ("<h3>" .$error_info['file']. "</h3>");

  print_r ("<h3>" .$error_info['line']. "</h3>"); 
?><!-- using error_get_last function showing error type message file and line of the error --