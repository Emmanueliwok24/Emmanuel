<?php

require_once './dataDB.php';


function checkIfUserExists($email){
    global $conn;

    $email = strtolower($email);

    $sql = "SELECT * FROM users WHERE `email` = '$email' ";
  

    $rows = $conn->query($sql);
 
    if($rows->num_rows > 0 ){
        return true;
    }else{
        return false;
    }


}
?>