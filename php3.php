<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    // tipe data di PHP
    $int = 100;
    $float = 75.5;
    $string = "Belajar PHP";
    $car = array("BMW", "PAGANI", "FORD", "KOENINSGG");
    $x = null;
    echo "Type data integer is " . $int . "<br>";
    echo "Type data float is " . $float . "<br>";
    echo "Type data string is " . $string . "<br>";
    if (TRUE)
        echo "Condition is True <br>";
    echo "Array element 1 is: $car[0] <br>";
    echo "$x <br>"; //tidak akan menampilkan apa-apa

    ?>
</body>

</html>