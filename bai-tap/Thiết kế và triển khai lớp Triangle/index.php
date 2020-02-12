<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("./Triangle.php");
    $triangle = new Triangle(2,3,4);
    echo $triangle->getPerimeter() . '<br>';
    echo $triangle->getArea() . '<br>';
    echo $triangle->toString()
    
    
    ?>
</body>
</html>