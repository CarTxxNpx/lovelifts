<?php
$servername = "localhost";
$username = "root"; // แก้ไขตาม phpMyAdmin ของคุณ
$password = ""; // แก้ไขตาม phpMyAdmin ของคุณ
$dbname = "mental_health_assessment";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
