<?php
require_once 'config.php';

$query = "SELECT * FROM employees";
$statement = $pdo->prepare($query);
$statement->execute();
$employees = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee List</h1>
    <a href="creat.php">Add Employee</a><br><br>
    <table border=2px>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>

        </tr>
        <?php foreach ($employees as $employee):
            if($employee['is_deleted']==0){
                ?>

                <tr>
                    <td><?= $employee['id'] ?></td>
                    <td><?= $employee['Name'] ?></td>
                    <td><?= $employee['Address'] ?></td>
                    <td><?= $employee['Salary'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $employee['id'] ?>">Update</a>
                        <a href="delet.php?id=<?= $employee['id'] ?>">Delete</a>
                        <a href="read.php?id=<?= $employee['id'] ?>">view</a>
                        
                    </td>
                </tr>
                <?php 

            }
            ?>
        <?php endforeach; ?>
    </table>
</body>
</html>