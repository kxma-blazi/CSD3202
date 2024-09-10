<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าราคาสินค้าและจำนวนสินค้า </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        echo "<p>Total Price: " . htmlspecialchars($price * $quantity) . "</p>";
    }
    ?>
</body>

</html>