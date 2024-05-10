<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM peminjaman WHERE id=$id");

header('location:peminjaman_index.php');

?>