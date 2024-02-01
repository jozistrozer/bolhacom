<?php
    include_once 'db.php';

    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    // Preverim ali je user vnesel email in pass
    if(!empty($email) && !empty($pass)) {
        $query = "select * from users where email = ?";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($pass, $user['pass'])) {
            // Podatki so pravilni
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['admin']   = $user['admin'];

            header("Location: index.php");
        }
        else {
            header("Location: login.php");
        }
    }

?>