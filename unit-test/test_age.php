<?php
// File: test-age.php
require_once 'Validator.php';

echo "<h2>Hasil Pengujian Validasi Umur</h2>";

$testCases = [
    25,            // Umur valid
    -5,            // Umur negatif
    "dua puluh",   // Umur bukan angka
    ""             // Umur kosong
];

foreach ($testCases as $age) {
    try {
        validateAge($age);
        echo "<p style='color: green;'>Input: <b>'$age'</b> -> Status: <b>PASS (Valid)</b></p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Input: <b>'$age'</b> -> Status: <b>FAIL (" . $e->getMessage() . ")</b></p>";
    }
}
?>