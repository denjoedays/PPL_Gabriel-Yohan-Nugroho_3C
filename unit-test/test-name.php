<?php
// File: test-name.php
require_once 'Validator.php';

echo "<h2>Hasil Pengujian Validasi Nama Mahasiswa</h2>";

// Skenario pengujian :
// 1. Nama lengkap
// 2. Nama dengan angka (misal 1212)
// 3. Input data kosong
$testCases = [
    "Gabriel Yohan Nugroho", // Nama Lengkap
    "Gabriel1212",            // Nama dengan Angka
    ""                        // Data Kosong
];

foreach ($testCases as $name) {
    try {
        validateName($name);
        echo "<p style='color: green;'>Input: <b>'$name'</b> -> Status: <b>PASS (Valid)</b></p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Input: <b>'$name'</b> -> Status: <b>FAIL (" . $e->getMessage() . ")</b></p>";
    }
}
?>