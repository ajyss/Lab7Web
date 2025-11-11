<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar</title>
</head>
<body>
    <h2>Form Input Data Diri</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan:</label><br>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manager">Manager</option>
            <option value="Freelancer">Freelancer</option>
        </select><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if (isset($_POST['nama'])) {
        $nama       = $_POST['nama'];
        $tgl_lahir  = $_POST['tgl_lahir'];
        $pekerjaan  = $_POST['pekerjaan'];

        $tanggal_lahir = new DateTime($tgl_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir)->y;

        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Desainer":
                $gaji = 7000000;
                break;
            case "Manager":
                $gaji = 10000000;
                break;
            case "Freelancer":
                $gaji = 5000000;
                break;
            default:
                $gaji = 0;
        }

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tgl_lahir <br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>