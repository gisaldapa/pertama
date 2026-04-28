<?php
include "koneksi.php";

$nama = $_POST['nama'];
$kehadiran = $_POST['kehadiran'];

for ($i = 0; $i < count($nama); $i++) {
    $n = $nama[$i];
    $k = $kehadiran[$i];

    $query = "INSERT INTO absensi (nama, kehadiran) VALUES ('$n', '$k')";
    
    if (!mysqli_query($conn, $query)) {
        echo "Error: " . mysqli_error($conn);
    }
}

echo "Data berhasil disimpan!";
?>