<?php
    include_once 'db.php';
    $title       = $_POST['title'];
    $description = $_POST['description'];
    $id          = $_POST['ident'];

    if (!empty($title) && !empty($description)) {
        $query = "update categories set title = ?, description = ? where id = ?";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$title, $description, $id]);

        header('Location: categories.php');
    }
?>