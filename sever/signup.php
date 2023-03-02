<?php

    require_once './dataDB.php';
    require_once './func.php';

    $fname = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
  


    if(checkIfUserExists($email) !== true){
        $email = strtolower($email);
        

        $pass = md5($pass);

        $sql = "INSERT INTO users (`fullname`, `email`,  `phonenumber`,`password`) VALUES ('$fname','$email','$phone','$pass')";

        if($conn->query($sql)){
            $_SESSION['user'] = $sql;
            echo'
            location.href = "./index.php"
            ';
        
            die('window.alert("Thanks for your registering into FOCUS STORE SITE. Please, LOGIN.")');
        } 
    }else{
        die('window.alert("sorry This user Already Exist")');
    }
?>

