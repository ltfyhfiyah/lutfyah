<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai Ujian</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Nilai Ujian</h2>
        <?php
        // Memeriksa apakah form telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Memeriksa apakah input nim, mata kuliah, dan nilai tidak kosong
            if (!empty($_POST['nim']) && !empty($_POST['mk']) && isset($_POST['nilai'])) {
                $nim = $_POST['nim'];
                $mata_kuliah = $_POST['mk'];
                $nilai = $_POST['nilai'];

                // Menampilkan hasil nilai
                echo "<div class='result'>";
                echo "<p><strong>NIM:</strong> " . $nim . "</p>";
                echo "<p><strong>Mata Kuliah:</strong> " . $mata_kuliah . "</p>";
                echo "<p><strong>Nilai:</strong> " . $nilai . "</p>";

                // Menampilkan hasil nilai (A, B, C, D, E) dan keterangan
                $keterangan = "";
                if ($nilai >= 80) {
                    $hasil_nilai = "A";
                    $keterangan = "Anda lulus dengan nilai sangat baik.";
                } elseif ($nilai >= 70) {
                    $hasil_nilai = "B";
                    $keterangan = "Anda lulus dengan nilai baik.";
                } elseif ($nilai >= 60) {
                    $hasil_nilai = "C";
                    $keterangan = "Anda lulus dengan nilai cukup.";
                } elseif ($nilai >= 50) {
                    $hasil_nilai = "D";
                    $keterangan = "Anda lulus dengan nilai cukup.";
                } else {
                    $hasil_nilai = "E";
                    $keterangan = "Maaf, Anda belum lulus ujian.";
                }
                
                echo "<p><strong>Hasil Nilai:</strong> " . $hasil_nilai . "</p>";
                echo "<p><strong>Keterangan:</strong> " . $keterangan . "</p>";

                echo "</div>";
            } else {
                echo "<div class='error'>Mohon lengkapi semua kolom.</div>";
            }
        }
        ?>
    </div>
</body>
</html>