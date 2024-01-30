<?php
    include_once 'db.php';
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $telephone  = $_POST['telephone'];
    $email      = $_POST['email'];
    $pass       = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($pass)) {
        $query = "insert into users (first_name, last_name, telephone, email, pass,city_id) values (?,?,?,?,?,?)";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$first_name,$last_name,$telephone,$email,$pass,1]);

        // Preusmeri na login
        header('Location: login.php');
    } else {
        header('Location: register.php');
    }

?>