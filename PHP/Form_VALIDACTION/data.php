<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>
        <?php 
            $name = $_POST['name'];
            $email = $_POST['email'];
        ?>
        <?php echo($name); ?>
        <br>
        <?php echo($email); ?>
    </h1>
</body>
</html>