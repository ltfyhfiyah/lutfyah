<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];

$dbh->query("DELETE FROM member WHERE id=$id");

header('location:member_index.php');

?>