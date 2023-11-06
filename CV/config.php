<?php
$host = 'localhost';
$db = 'CV';
$user = 'root';
$pwd = '';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false
$perintah = $conn->query('select * from cv_data');
$data = $perintah->fetch_assoc();
$id = 1;
$nama = $data['nama'];
$alamat = $data['alamat'];
$email = $data['email'];
$telepon = $data['telepon'];
$pengalaman_kerja = $data['pengalaman_kerja'];
$keterampilan = $data['keterampilan'];
$pendidikan = $data['pendidikan'];
$web = $data['web'];
$foto_path = $data['foto_path'];

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
