# Leb7Web

Nama: Muflih Salda Maulana

NIM: 312410527

Mata Kuliah: Pemrograman Web

Dosen Pengampu: Agung Nugroho, S.Kom., M.Kom

**1. Membuat Folder dan File Dasar**

Buat folder baru di direktori htdocs:

```C:\xampp\htdocs\lab7_php_dasar```


Lalu buat file pertama:

```belajar_php_dasar.php```

 kode:
```<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

Screenshot output halaman Hello World

<img width="590" height="172" alt="image" src="https://github.com/user-attachments/assets/8527f157-9736-4863-b3da-3df8a38f4a62" />

**2. Variabel PHP**

Menambahkan variabel $nim dan $nama.
```
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
```

Screenshot tampilan hasil variabel PHP
 
<img width="741" height="277" alt="image" src="https://github.com/user-attachments/assets/53d10f71-85c3-4815-944e-1fcfe47f9f1c" />


**3. Predefine Variable $_GET**

Gunakan $_GET untuk menangkap data dari URL:

<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>


Akses melalui:

http://localhost/lab7_php_dasar/latihan2.php?nama=Muflih


Screenshot hasilnya di browser

<img width="677" height="369" alt="image" src="https://github.com/user-attachments/assets/fde53e1b-36ab-4b0e-b750-fe1b2a4a7055" />

**4. Form Input**

Contoh form dengan metode POST:

```<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
```

Screenshot form input dan hasil output


<img width="486" height="198" alt="image" src="https://github.com/user-attachments/assets/eb63aaaf-d005-4703-8403-49b1bb8cc343" />


**5. Operator dan Kondisi**

Contoh perhitungan sederhana:
```
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
```

Screenshot hasil perhitungan gaji

<img width="496" height="105" alt="image" src="https://github.com/user-attachments/assets/049db27d-755b-47ee-8cc6-84603ea9d76e" />


**6. Struktur Kondisi IF dan SWITCH**

Contoh kondisi hari:

```$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}
```


Screenshot hasil kondisi hari

<img width="350" height="194" alt="image" src="https://github.com/user-attachments/assets/96fc1266-d6aa-4ef8-af0b-2bd299a5583d" />


**8. Perulangan for, while, dan do while**

Contoh:
```
for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . "<br>";
}
```

Screenshot hasil perulangan

<img width="310" height="454" alt="image" src="https://github.com/user-attachments/assets/7536e1d2-ca63-4852-9e61-5b802f07707f" />


<img width="313" height="448" alt="image" src="https://github.com/user-attachments/assets/803f3e7e-bca1-4351-8293-edfe59de207e" />

<img width="371" height="466" alt="image" src="https://github.com/user-attachments/assets/1f24e8fe-b49c-44d9-9fff-055416f15657" />




Tugas Praktikum
Soal:

Buat program PHP sederhana dengan form input yang menampilkan nama, tanggal lahir, dan pekerjaan.
Hitung umur berdasarkan tanggal lahir, serta tampilkan gaji sesuai pekerjaan yang dipilih.

Kode Program: tugas_php.php
```<!DOCTYPE html>
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

        $lahir = new DateTime($tanggal_lahir);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($lahir)->y;

        switch ($pekerjaan) {
            case "Programmer": $gaji = 8000000; break;
            case "Desainer": $gaji = 6000000; break;
            case "Guru": $gaji = 5000000; break;
            case "Dokter": $gaji = 10000000; break;
            default: $gaji = 0; break;
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
```

Tambahkan screenshot hasil input dan output program tugas.

Hasil Output

Contoh hasil setelah form dikirim:

Nama: Budi Setiawan
Tanggal Lahir: 1998-04-17
Umur: 27 tahun
Pekerjaan: Programmer
Gaji: Rp 8.000.000

Screenshot hasil tampilan di browser.

<img width="453" height="445" alt="image" src="https://github.com/user-attachments/assets/2de89fac-2fba-4db7-85b6-de3e635a6f00" />
