<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    //tipe data object
    class student
    {
        function calculation()
        {
            echo "Display marks";
        }
    }
    //mengakses objek
    $object = new student();
    $obj->calculation();
    ?>
</body>

</html>