<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Absen</title>
</head>
<body>

<h2>Tabel Absen</h2>

<form method="POST" action="simpan.php">
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kehadiran</th>
        </tr>

        <?php
        $nama = ["Gisal", "Gisali", "Gisalu", "Gisalo", "Gisale"];
        foreach ($nama as $n) {
            echo "<tr>
                <td>$n</td>
                <td>
                    <select name='kehadiran[]'>
                        <option>Hadir</option>
                        <option>Izin</option>
                        <option>Sakit</option>
                        <option>Alpa</option>
                    </select>
                    <input type='hidden' name='nama[]' value='$n'>
                </td>
            </tr>";
        }
        ?>
    </table>

    <br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>