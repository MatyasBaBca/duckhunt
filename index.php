<?php
include 'function.php';
?>
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
$size = rand(20, 150);
$left = rand(0, 95);
$top = rand(0, 95);
drawDuck($size, $left, $top, "#FF0000");
?>;

</body>
</html>