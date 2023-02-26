<?php

require_once 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_PST['nim'];

mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')");

header('Location: mahasiswa.php');