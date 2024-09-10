<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ผลลัพธ์การเข้าสู่ระบบ</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        p {
            font-size: 26px;
            font-weight: bold;
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
    <h3>ผลลัพธ์การตรวจสอบการเข้าสู่ระบบ</h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr />

    <?php
        $username = "admin";
        $password = "admin";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_username = $_POST['username'];
            $input_password = $_POST['password'];

            if ($input_username == "" || $input_password == "") {
                echo "<p id=\"fail\">กรุณากรอกชื่อผู้ใช้และรหัสผ่าน</p>";
            } elseif ($input_username == $username && $input_password == $password) {
                echo "<p id=\"pass\">Login Successful</p>";
            } else {
                echo "<p id=\"fail\">เข้าสู่ระบบล้มเหลว กรุณาตรวจสอบชื่อผู้ใช้และรหัสผ่าน</p>";
            }
        }
    ?>
</body>
</html>
