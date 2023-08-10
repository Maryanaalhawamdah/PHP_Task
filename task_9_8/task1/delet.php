<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $isDeleted=1;
    $query = "UPDATE employees SET is_deleted =? WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$isDeleted,$id]);
    // $query = "DELETE FROM employees WHERE id = ?";
    // $statement = $pdo->prepare($query);
    // $statement->execute([$id]);

    header('Location: index.php');
    exit();
} else {
    echo "Invalid employee ID.";
    exit();
}


?>