<?php
// ฟังก์ชันสำหรับการแสดงข้อผิดพลาด
function showError($message) {
    echo "<p class='error'>$message</p>";
}

// รับข้อมูลจากฟอร์ม
$totalIncome = isset($_POST['totalIncome']) ? (float)$_POST['totalIncome'] : 0;
$expense = isset($_POST['expense']) ? (float)$_POST['expense'] : 0;
$deduc = isset($_POST['deduc']) ? (float)$_POST['deduc'] : 0;

// ตรวจสอบข้อมูลที่จำเป็น
if ($totalIncome <= 0) {
    showError('รายได้รวมต้องเป็นจำนวนบวก');
    exit;
}

if ($expense < 0) {
    showError('ค่าใช้จ่ายต้องเป็นจำนวนบวกหรือศูนย์');
    exit;
}

if ($deduc < 0) {
    showError('ค่าลดหย่อนต้องเป็นจำนวนบวกหรือศูนย์');
    exit;
}

// คำนวณภาษี
$netIncome = $totalIncome - $expense - $deduc;
$tax = 0;

// อัตราภาษีแบบขั้นบันได
if ($netIncome > 500000) {
    $tax += ($netIncome - 500000) * 0.2;
    $netIncome = 500000;
}

if ($netIncome > 300000) {
    $tax += ($netIncome - 300000) * 0.15;
    $netIncome = 300000;
}

if ($netIncome > 150000) {
    $tax += ($netIncome - 150000) * 0.05;
}

// แสดงผลลัพธ์
if ($tax > 0) {
    echo "<p class='success'>ภาษีที่ต้องชำระ: ฿" . number_format($tax, 2) . "</p>";
} else {
    echo "<p class='success'>ไม่ต้องชำระภาษี</p>";
}
?>
