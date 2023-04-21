<!DOCTYPE html>
<html lang="en">
<head>
    <title>Коментарі</title>
</head>
<body>
<h2>Коментарі</h2>
<?php
// Відобразити всі коментарі з бази даних
$db_host = 'localhost';
$db_name = 'mydatabase';
$db_user = 'myusername';
$db_pass = 'mypassword';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p><strong>'.$row['name'].'</strong>: '.$row['comment'].'</p>';
    }
} else {
    echo '<p>Поки що немає коментарів.</p>';
}

mysqli_close($conn);
?>
<hr>
<h2>Додати коментар</h2>
<form method="POST" action="add_comment.php">
    <label for="name">Ім'я:</label>
    <input type="text" name="name" required><br><br>
    <label for="comment">Коментар:</label><br>
    <textarea name="comment" rows="5" cols="50" required></textarea><br><br>
    <input type="submit" value="Додати коментар">
</form>
</body>
</html>
