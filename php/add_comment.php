<?php
// Отримати дані з форми
$name = $_POST['name'];
$comment = $_POST['comment'];

// Зберегти коментар в базу даних
$db_host = 'localhost';
$db_name = 'mydatabase';
$db_user = 'myusername';
$db_pass = 'mypassword';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
mysqli_query($conn, $sql);

mysqli_close($conn);

// Повернення на сторінку з коментарями
header('Location: comments.php');
?>
