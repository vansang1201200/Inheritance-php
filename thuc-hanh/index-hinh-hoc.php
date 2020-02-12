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
    include_once("shape.php");
    include_once("crite.php");
    include_once("cylinder.php");
    include_once("rectangle.php");
    include_once("./square.php");

    $Circle = new Circle('crite1', 3);
    echo $Circle->calculateArea() . '<br>';
    echo $Circle->calculatePerimeter() . '<br>';

    $cylinder = new cylinder('crite2', 4, 5);
    echo $cylinder->calculateArea() . '<br>';
    echo $cylinder->calculatePerimeter() . '<br>';

    $rectangle = new rectangle('crite3' , 5 ,6);
    echo $rectangle->calculateArea() . '<br>';
    echo $rectangle->calculatePerimeter() . '<br>';

    $shape = new shape('crite4');
    echo $shape->show() .'<br>';

    $square = new square('crite5',4,4) ;
    echo $square->calculateArea() .'<br>';
    echo $square->calculatePerimeter() .'<br>';
    ?>

</body>

</html>