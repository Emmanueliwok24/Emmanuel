<?php
  
  $serverhost = 'localhost';
  $severroot = 'root';
  $severpass = '';
  $severDB = 'focus';

  
  try {
      
      $conn = mysqli_connect($serverhost, $severroot, $severpass, $severDB);
      
  } catch (Exception $e){
     die($e);
  }


?>