<?php 
require_once 'dbkoneksi.php';

try {
    $_id_member = $_POST['id_member'];
    $_id_buku = $_POST['id_buku'];
    $_tgl_peminjaman = $_POST['tgl_peminjaman'];
    $_tgl_pengembalian = $_POST['tgl_pengembalian'];
    $_status_peminjaman = $_POST['status_peminjaman'];
    $_proses = $_POST['proses'];

    // array data
    $ar_data[] = $_id_member;
    $ar_data[] = $_id_buku;
    $ar_data[] = $_tgl_peminjaman;
    $ar_data[] = $_tgl_pengembalian;
    $ar_data[] = $_status_peminjaman;

    if ($_proses == "Simpan") {
        $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_peminjaman, tgl_pengembalian, status_peminjaman) VALUES (?, ?, ?, ?, ?)";
    } else if ($_proses == "Update") {
        $ar_data[] = $_POST['idedit'];
        $sql = "UPDATE peminjaman SET id_member=?, id_buku=?, tgl_peminjaman=?, tgl_pengembalian=?, status_peminjaman=? WHERE id=?";
    }  
    
    if (isset($sql)) {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);
    }

    header('location:peminjaman_index.php');
} catch (PDOException $e) {
    // Tangani kesalahan database
    echo "Error:" . $e->getMessage();
}
?>