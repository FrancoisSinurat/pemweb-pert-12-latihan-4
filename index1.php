<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form menggunakan metode POST
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];
    $kelas = $_POST["kelas"];
    $semester = $_POST["semester"];
    
    // Menampilkan hasil data yang di-submit di halaman HTML
    echo "<h2>Data yang Anda submit:</h2>";
    echo "Nama: $nama <br>";
    echo "NIM: $nim <br>";
    echo "Prodi: $prodi <br>";
    echo "Kelas: $kelas <br>";
    echo "Semester: $semester <br>";
} else {
    // Jika akses langsung ke file ini tanpa melalui form, tampilkan pesan error
    echo "Akses tidak valid!";
}
?>