<?php
    include_once 'db.php';
    $id = $_GET['id'];

    if (!empty($id)) {
        $query = "delete from cities where id = ?";
        $stmt  = $pdo->prepare($query);
        $stmt->execute([$id]);
    }
?>