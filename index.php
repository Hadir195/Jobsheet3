<?php

// Menampilkan informasi pribadi
$nis = "2233266";
$nama = "Hadir sastra imam p";
$alamat = "Karangasem bugel Rt 03 RW 03";
$telepon = "0895414356080";
$email = "muri123empat@gmail.com";

echo "<h1>Informasi Pribadi</h1>";
echo "<p>NIS : $nis</p>";
echo "<p>Nama : $nama</p>";
echo "<p>Alamat : $alamat</p>";
echo "<p>Telepon : $telepon</p>";
echo "<p>Email : $email</p>";
?>

<form action="index.php" method="GET">
    NilaiTugas: <input type="text" name="tugas"><br>
    NilaiUts: <input type="text" name="uts"><br>
    NilaiUas: <input type="text" name="uas"><br>
    <input type="submit">
</form>

<?php
if (isset($_GET['tugas']) && isset($_GET['uts']) && isset($_GET['uas'])) {
    // Konversi input ke tipe numerik
    $tugas = isset($_GET["tugas"]) ? (float)$_GET["tugas"] : 0;
    $uts = isset($_GET["uts"]) ? (float)$_GET["uts"] : 0;
    $uas = isset($_GET["uas"]) ? (float)$_GET["uas"] : 0;

    // Persentase
    $tugas_persen = 20;
    $uts_persen = 35;
    $uas_persen = 45;

    // Hitung nilai akhir
    $nilai_akhir = ($tugas * $tugas_persen / 100) + ($uts * $uts_persen / 100) + ($uas * $uas_persen / 100);

    // Tentukan grade
    if ($nilai_akhir >= 85) {
        $grade = 'A';
    } elseif ($nilai_akhir >= 68.5) {
        $grade = 'B';
    } elseif ($nilai_akhir >= 58.5) {
        $grade = 'C';
    } elseif ($nilai_akhir >= 40) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    // Tampilkan hasil
    echo "<h2>Hasil Perhitungan Nilai</h2>";
    echo "<p>NIS : $nis</p>";
    echo "<p>Nama : $nama</p>";
    echo "<p>N. Tugas : $tugas</p>";
    echo "<p>N. UTS : $uts</p>";
    echo "<p>N. UAS : $uas</p>";
    echo "<p>N. Akhir : $nilai_akhir</p>";
    echo "<p>N. Huruf : $grade</p>";
}
?>
