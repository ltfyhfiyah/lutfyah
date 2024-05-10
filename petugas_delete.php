<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM petugas WHERE id=$id");

header('location:petugas_index.php');

?>