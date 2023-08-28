<?php
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt =  $conn->prepare("insert into registration(username, phone, email, dob, address) values(?,?,?,?,?)");
        $stmt->bind_param("sisis",$username, $phone, $email, $dob, $address);
        $stmt->execute();
        echo "registration successfully....!";
        $stmt->close();
        $stmt->close();
        
    }




?>