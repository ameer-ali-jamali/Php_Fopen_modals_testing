<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // $getData = file_get_contents('order.txt');
    $fileName = "order.txt";
    // $new = "this is dumy data for testing";
    $file = fopen($fileName, 'r');
    $getData = fread($file, filesize($fileName));
    // $fwrite = fwrite($file, $new,filesize($fileName));
    fclose($file);
    echo $getData;
    ?>
</body>

</html>