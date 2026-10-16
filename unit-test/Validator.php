<?php

// Validasi Umur (Slide 5-8)
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

// Validasi Nama Mahasiswa
function validateName($name) {
    if (empty(trim($name))) {
        throw new Exception("Nama tidak boleh kosong");
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    return true;
}
?>