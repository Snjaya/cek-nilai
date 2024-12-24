<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Seleksi PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .container {
            width: 70%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f4e7;
            border-left: 5px solid #4CAF50;
        }
        .output p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h1>Program Seleksi Nilai dan Informasi</h1>

    <div class="container">
        <form method="POST">
            <!-- Program 1: Nilai Akhir Semester -->
            <div class="form-group">
                <label for="nrp">Masukkan NRP:</label>
                <input type="text" id="nrp" name="nrp" required>
            </div>
            <div class="form-group">
                <label for="nama">Masukkan Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Masukkan Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required>
            </div>
            <div class="form-group">
                <label for="tugas">Masukkan Nilai Tugas:</label>
                <input type="number" step="0.01" id="tugas" name="tugas" required>
            </div>
            <div class="form-group">
                <label for="kuis">Masukkan Nilai Kuis:</label>
                <input type="number" step="0.01" id="kuis" name="kuis" required>
            </div>
            <div class="form-group">
                <label for="uts">Masukkan Nilai UTS:</label>
                <input type="number" step="0.01" id="uts" name="uts" required>
            </div>
            <div class="form-group">
                <label for="uas">Masukkan Nilai UAS:</label>
                <input type="number" step="0.01" id="uas" name="uas" required>
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Hitung Nilai Akhir</button>
            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Ambil input dari form
            $nrp     = $_POST['nrp'];
            $nama    = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $n_tgs   = (float)$_POST['tugas'];
            $n_kuis  = (float)$_POST['kuis'];
            $n_uts   = (float)$_POST['uts'];
            $n_uas   = (float)$_POST['uas'];

            // Menghitung nilai akhir
            $n_akhir = 0.20 * $n_tgs + 0.20 * $n_kuis + 0.30 * $n_uts + 0.30 * $n_uas;

            // Menentukan huruf mutu dan status kelulusan
            if ($n_akhir >= 81) {
                $hm = 'A';
                $status = 'Lulus';
            } elseif ($n_akhir >= 70) {
                $hm = 'B';
                $status = 'Lulus';
            } elseif ($n_akhir >= 60) {
                $hm = 'C';
                $status = 'Belum Lulus';
            } else {
                $hm = 'D';
                $status = 'Belum Lulus';
            }
            ?>

            <div class="output">
                <h3>Hasil Perhitungan Nilai Akhir:</h3>
                <p><strong>NRP:</strong> <?= $nrp; ?></p>
                <p><strong>Nama:</strong> <?= $nama; ?></p>
                <p><strong>Jurusan:</strong> <?= $jurusan; ?></p>
                <p><strong>Nilai Tugas:</strong> <?= $n_tgs; ?></p>
                <p><strong>Nilai Kuis:</strong> <?= $n_kuis; ?></p>
                <p><strong>Nilai UTS:</strong> <?= $n_uts; ?></p>
                <p><strong>Nilai UAS:</strong> <?= $n_uas; ?></p>
                <p><strong>Nilai Akhir:</strong> <?= number_format($n_akhir, 2); ?></p>
                <p><strong>Huruf Mutu:</strong> <?= $hm; ?></p>
                <p><strong>Status Kelulusan:</strong> <?= $status; ?></p>
            </div>

            <?php
        }
        ?>
    </div>

</body>
</html>
