<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="post" action="">
        <label>Nama: </label>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" required><br><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Guru">Guru</option>
            <option value="Dokter">Dokter</option>
            <option value="Mahasiswa">Mahasiswa</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
    </form>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Desainer":
                $gaji = 6000000;
                break;
            case "Guru":
                $gaji = 5000000;
                break;
            case "Dokter":
                $gaji = 10000000;
                break;
            default:
                $gaji = 0;
                break;
        }

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Tanggal Lahir: <b>$tanggal_lahir</b><br>";
        echo "Umur: <b>$umur tahun</b><br>";
        echo "Pekerjaan: <b>$pekerjaan</b><br>";
        echo "Gaji: <b>Rp " . number_format($gaji, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
