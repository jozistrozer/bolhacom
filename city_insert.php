<?php
    include_once 'db.php';
    $title       = $_POST['title'];
    $post_number = $_POST['post_number'];

    if(!empty($title) && !empty($post_number)) {
        $query = "insert into cities (title,post_number) values (?,?)";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$title,$post_number]);

        header('Location: cities.php');
    } else {
        header('Location: city_add.php');
    }

?>