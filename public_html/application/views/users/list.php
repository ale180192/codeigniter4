
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        var_dump($users);
            foreach ($users as $user){
                echo "<br>";
                echo "<li>".$user["username"]."</li>";
                echo "<br>";
            }
        ?>
    </ul>
</body>
</html>