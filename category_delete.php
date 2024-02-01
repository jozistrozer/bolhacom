<?php
    include_once 'db.php';
    $id = $_GET['id'];

    if (!empty($id)) {
        $query = "delete from categories where id = ?";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$id]);
    }
?>