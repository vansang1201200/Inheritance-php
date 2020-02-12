<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("./class-Point.php");
    include_once("./class-MoveablePoint.php");
    $MoveablePoint = new MoveablePoint();
    $MoveablePoint->setxS(3);
    $MoveablePoint->setyS(4);
    echo $MoveablePoint->tostring() .'<br>';
    $MoveablePoint->move();
    echo  $MoveablePoint->tostring() . '<br>';







    //  $Point = new Point();
    //  $Point->setx(5);
    //  $Point->setx(4);
    
    
    
    ?>
</body>
</html>