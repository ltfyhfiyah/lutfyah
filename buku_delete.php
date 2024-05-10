<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM buku WHERE id=$id");

header('location:buku_index.php');

?>