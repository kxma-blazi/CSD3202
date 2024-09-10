้<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>โปรแกรมตรวจสอบสถานะการเข้าสู่ระบบ</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr />

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = "s65122250014"; // useername
        $password = "admin1234"; // password

        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        if ($input_username == $username && $input_password == $password) {
            echo "<p id=\"pass\">Login successful. Welcome, $username!</p>";
        } else {
            echo "<p id=\"fail\">Login failed. Please check your username and password.</p>";
        }
    }
    ?>
</body>

</html>