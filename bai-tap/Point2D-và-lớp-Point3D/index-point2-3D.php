<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("./classPoint2D.php");
    include_once("./classPoint3D.php");
    // $classPoint2D = new classPoint2D();
    // $classPoint2D->set_x(2);
    // $classPoint2D->set_y(3);
    // echo $classPoint2D->show();


    $classPoint3D = new classPoint3D();
    $classPoint3D->set_xyz(3,3,4);
    $classPoint3D->set_xy(4,5);  
    echo $classPoint3D->show1(); 
    ?>
</body>
</html>