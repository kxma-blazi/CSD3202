<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // ตั้งค่าอีเมล
    $to = "s65122250014@ssru.ac.th"; // เปลี่ยนอีเมล
    $subject = "ข้อความจาก $name";
    $body = "ชื่อ: $name\n";
    $body .= "อีเมล: $email\n";
    $body .= "ข้อความ:\n$message\n";
    
    // ส่งอีเมล
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('ส่งข้อความสำเร็จ!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('ส่งข้อความไม่สำเร็จ กรุณาลองอีกครั้ง'); window.location.href='contact.html';</script>";
    }
}
?>
