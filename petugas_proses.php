<?php 
require_once 'dbkoneksi.php';

try {
    $_nama = $_POST['nama'];
    $_jk = $_POST['jk'];
    $_no_hp = $_POST['no_hp'];
    $_email = $_POST['email'];
    $_alamat = $_POST['alamat'];
    $_jabatan = $_POST['jabatan'];
    $_proses = $_POST['proses'];

    // array data
    $ar_data[] = $_nama;
    $ar_data[] = $_jk;
    $ar_data[] = $_no_hp;
    $ar_data[] = $_email;
    $ar_data[] = $_alamat;
    $ar_data[] = $_jabatan;

    if ($_proses == "Simpan") {
        $sql = "INSERT INTO petugas (nama, jk, no_hp, email, alamat, jabatan) VALUES (?, ?, ?, ?, ?, ?)";
    } else if ($_proses == "Update") {
        $ar_data[] = $_POST['idedit'];
        $sql = "UPDATE petugas SET nama=?, jk=?, no_hp=?, email=?, alamat=?, jabatan=? WHERE id=?";
    }

    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
    }

    header('location:petugas_index.php');
} catch (PDOException $e) {
    // Tangani kesalahan database
    echo "Error: " . $e->getMessage();
}
?>