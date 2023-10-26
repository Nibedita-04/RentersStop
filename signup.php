<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $ConfirmPass = $_POST['confirm-password'];

    //Database connection
    $conn = new mysqli('localhost','root','','Project_1');
    if($conn->connect_error){
        die("Connection Failed : ".$connect->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into signup(Name,Email,Password,ConfirmPass)values(?,?,?,?)");
        $stmt->bind_param("ssss",$Name,$Email,$Password,$ConfirmPass);
        $stmt->execute();
        echo "Signed Up Successfully";
        $stmt->close();
        $conn->close();    
    }
?>