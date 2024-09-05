้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
    <style>
        body {
            text-align: center;
        }

        p {
            font: 26px bold;
        }

        #pass {
            color: green;
        }

        #fail {
            color: red;
        }
    </style>
</head>

<body>
    <h3>โปรแกรมตรวจสอบสถานะการเข้าสู่ระบบ</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr />

    <?php
    $username = "s65122250014";
    $password = "thisIsPassword";

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $username && $input_password == $password) {
        echo "<p id=\"pass\">Login successful. Welcome, $username!</p>";
    } else {
        echo "<p id=\"fail\">Login failed. Please check your username and password.</p>";
    }
    ?>
</body>

</html>