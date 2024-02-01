<?php
    include_once 'db.php';
    $title       = $_POST['title'];
    $post_number = $_POST['post_number'];
    $id          = $_POST['ident'];

    if (!empty($title) && !empty($post_number)) {
        $query = "update cities set title = ?, post_number = ? where id = ?";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$title, $post_number, $id]);

        header('Location: cities.php');
    }
?>