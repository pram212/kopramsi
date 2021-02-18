
<?php 
include 'function.php';

$nama=$_GET["nama"];

//mengambil data
$query = mysqli_query($koneksi, "SELECT * FROM data_koperasi WHERE nama_koperasi='$nama'");
$datakoperasi = mysqli_fetch_array($query);
$data = array(
            'nik' => $datakoperasi["nik_koperasi"],
            'jenis' => $datakoperasi["jenis_koperasi"],
            'alamat' => $datakoperasi["alamat_koperasi"].", Kel. ".$datakoperasi["desa"],
            );

//tampil data
echo json_encode($data);
 ?>
