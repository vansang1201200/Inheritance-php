<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("./class-Circle-Cylinder.php");
    $Circle = new Circle('hinh_tron', 'yellow', 5);
    echo $Circle->get_name() . '<br>';
    echo $Circle->get_color() . '<br>';
    echo $Circle->get_radius() . '<br>';
    $Cylinder = new cylinder('hinh_tron1','yellow',5,4);
    echo $Cylinder->cylindrical_volume();

    ?>
</body>

</html>