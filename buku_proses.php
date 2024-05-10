<?php 
require_once 'dbkoneksi.php';

try {
    $_judul = $_POST['judul'];
    $_penulis = $_POST['penulis'];
    $_penerbit = $_POST['penerbit'];
    $_tahun_terbit = $_POST['tahun_terbit'];
    $_deskripsi = $_POST['deskripsi'];
    $_proses = $_POST['proses'];

    // array data
    $ar_data[] = $_judul;
    $ar_data[] = $_penulis;
    $ar_data[] = $_penerbit;
    $ar_data[] = $_tahun_terbit;
    $ar_data[] = $_deskripsi;

    if ($_proses == "Simpan") {
        $sql = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, deskripsi) VALUES (?, ?, ?, ?, ?)";
    } else if ($_proses == "Update") {
        $ar_data[] = $_POST['idedit'];
        $sql = "UPDATE buku SET judul=?, penulis=?, penerbit=?, tahun_terbit=?, deskripsi=? WHERE id=?";
    }

    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
    }

    header('location:buku_index.php');
} catch (PDOException $e) {
    // Tangani kesalahan database
    echo "Error: " . $e->getMessage();
}
?>