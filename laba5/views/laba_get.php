<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба</title>
</head>
<body>
    <form method="get">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="submit" value="надіслати"><br>
    </form>
    <?php
        if(empty($_GET['first']) || empty($_GET['second'])){
            exit('Не заповнені поля');
        }
        else{
            echo'</pre>';
                print_r($_GET);
            echo '</pre>';
        }
    ?>

</body>
