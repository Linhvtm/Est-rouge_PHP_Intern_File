<?php

require_once 'database.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = 'DELETE FROM users WHERE id ='.$id;
} else {
    echo 'No id set';
}

$result = $conn->query($sql);

if ($result) {
    echo $_SESSION['success_message'] = 'User data deleted successfully';
} else {
    echo  $_SESSION['error_message'] = 'User data couldn\'t be deleted';
}
header('Location:../Est-rouge_PHP_Intern_SimpleCRUDApp/index.php');
