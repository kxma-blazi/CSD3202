<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟอร์มที่รับค่าชื่อผู้ใช้และรหัสผ่าน </h3>
    <h3>Name: สหรัถ อินต๊ะวิรา ID: 65122250014</h3>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์ม
        $username = $_POST['username'];
        $password = $_POST['password'];

        // ตรวจสอบว่าค่าชื่อผู้ใช้เเละรหัสผ่านไม่ว่างเปล่า
        if (!empty($username) && !empty($password)) {
            // เเฮชรหัสผ่าน
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // เเสดงชื่อผู้ใช้เเละรหัสผ่านที่ถูกเเฮชเเล้ว
            echo "ชื่อผู้ใช้: $username <br>";
            echo "รหัสผ่าน: $hashed_password <br>";
        } else {
            // เเสดงข้อความเตือนหาก User กรอกข้อมูลไม่ครบ
            echo "กรุณากรอกข้อมูลให้ครบถ้วน";
        }
    }
    ?>
</body>

</html>