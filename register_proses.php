<?php 
require_once 'dbkoneksi.php';

try {
    // Mengambil data dari formulir
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_repeat_password = $_POST['repeat_password'];

    // Validasi data
    $errors = array();

    // Validasi email
    if (empty($_email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validasi password
    if (empty($_password)) {
        $errors[] = "Password is required";
    } elseif (strlen($_password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    } elseif ($_password !== $_repeat_password) {
        $errors[] = "Passwords do not match";
    }

    // Pengecekan apakah email sudah terdaftar sebelumnya
    $sql_check_email = "SELECT * FROM users WHERE email=?";
    $stmt_check_email = $dbh->prepare($sql_check_email);
    $stmt_check_email->execute([$_email]);
    $existing_user = $stmt_check_email->fetch();

    if ($existing_user) {
        $errors[] = "Email is already registered";
    }

    // Jika tidak ada kesalahan validasi, lakukan proses pendaftaran
    if (empty($errors)) {
        // Hash password sebelum disimpan di database
        $hashed_password = password_hash($_password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data pengguna ke dalam database
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        
        $stmt = $dbh->prepare($sql);
        $danger = $stmt->execute([$_email, $hashed_password]);

        // Cek apakah pendaftaran berhasil
        if ($danger) {
            // Redirect pengguna ke halaman login atau halaman lain setelah registrasi berhasil
            header("Location: index.php");
            exit;
        } else {
            $errors[] = "Registration failed. Please try again later.";
        }
    }

    // Jika terdapat kesalahan, tampilkan pesan kesalahan
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} catch (PDOException $e) {
    // Tangani kesalahan database
    echo "Error: " . $e->getMessage();
}
?>
