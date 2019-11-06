<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $megabyte = $_POST["mb"];

    echo $megabyte, " Megabytes son: ", $megabyte * 1000, " Kilobytes.";
    
    ?>
</body>
</html>