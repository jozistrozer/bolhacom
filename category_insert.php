<?php
    include_once 'db.php';
    $title       = $_POST['title'];
    $description = $_POST['description'];

    if(!empty($title) && !empty($description)) {
        $query = "insert into categories (title,description) values (?,?)";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$title,$description]);

        header('Location: categories.php');
    } else {
        header('Location: category_add.php');
    }
?>