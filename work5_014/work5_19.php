<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป foreach </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php
    $numbers = array(897, 446, 38, 539, 891, 731, 278, 406, 175, 24);

    foreach ($numbers as $number) {
        echo "$number: ";
        if ($number % 2 == 0) {
            echo "คู่<br>";
        } else {
            echo "คี่<br>";
        }
    }
    ?>
</body>

</html>