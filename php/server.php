<?php 

    session_start();
    
    require_once '../sever/dataDB.php';

    $email = strtolower($conn->real_escape_string($_POST['email']));
    $password = $conn->real_escape_string($_POST['password']);
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";

    $results = $conn->query($sql);
    if($results->num_rows > 0){
        $rows = $results->fetch_assoc();
        $_SESSION['user'] = $rows;


        header('location: ../index.php?thanks');
     
    }else{
        header('location: ../index.php?error=invalid+email+password');
    }

?>
