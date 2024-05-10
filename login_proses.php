<?php
require_once "dbkoneksi.php"; // Menggunakan file dbkoneksi.php untuk koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!empty($email) && !empty($password)) {
            // Koneksi ke database
            global $dbh; // Menggunakan objek koneksi PDO dari dbkoneksi.php
            if (!$dbh) {
                die("Connection failed");
            }

            // Menggunakan prepared statement untuk memperbaiki keamanan
            $stmt = $dbh->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Memeriksa apakah ada baris dengan email yang cocok
            if ($row) {
                // Memeriksa kecocokan password
                if (password_verify($password, $row['password'])) {
                    // Login berhasil
                    header("Location: buku_index.php");
                    exit;
                } else {
                    echo "Invalid email or password. Please try again.";
                }
            } else {
                // Tidak ada pengguna dengan email yang cocok
                echo "Invalid email or password. Please try again.";
            }

            $dbh = null; // Menutup koneksi
        } else {
            echo "Email and password are required.";
        }
    } else {
        echo "Invalid request.";
    }
}
?>