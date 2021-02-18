<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'db_koperasi');

function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}

	return $rows;
}

function tambah($data) {
	global $koneksi;
	 // ambil data dari tiap inputan
    $nama_koperasi=htmlspecialchars($data["nama_koperasi"]);
    $jenis_koperasi=htmlspecialchars($data["jenis_koperasi"]);
    $nik_koperasi=htmlspecialchars($data["nik_koperasi"]);
    $telepon_koperasi=htmlspecialchars($data["telepon_koperasi"]);
    $email_koperasi=htmlspecialchars($data["email_koperasi"]);
    $alamat_koperasi=htmlspecialchars($data["alamat_koperasi"]);
    $desa=$data["desa"];
    $kecamatan=$data["kecamatan"];
    $kota=$data["kota"];
    $provinsi=$data["provinsi"];
    $kodepos=$data["kodepos"];

    $query="INSERT INTO data_koperasi 
            VALUES 
        ('', '$nama_koperasi', '$jenis_koperasi', '$nik_koperasi', '$alamat_koperasi' , '$desa' , '$kecamatan' , '$kota' , '$provinsi' , '$kodepos', '$telepon_koperasi', '$email_koperasi')
        ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahKoperasi($data) {
    global $koneksi;
     // ambil data dari tiap inputan
    $id=$data["id"];
    $nama_koperasi=htmlspecialchars($data["nama_koperasi"]);
    $jenis_koperasi=htmlspecialchars($data["jenis_koperasi"]);
    $nik_koperasi=htmlspecialchars($data["nik_koperasi"]);
    $telepon_koperasi=htmlspecialchars($data["telepon_koperasi"]);
    $email_koperasi=htmlspecialchars($data["email_koperasi"]);
    $alamat_koperasi=htmlspecialchars($data["alamat_koperasi"]);
    $desa=$data["desa"];
    $kecamatan=$data["kecamatan"];
    $kota=$data["kota"];
    $provinsi=$data["provinsi"];
    $kodepos=$data["kodepos"];

    $query="UPDATE data_koperasi SET nama_koperasi='$nama_koperasi', jenis_koperasi='$jenis_koperasi', nik_koperasi='$nik_koperasi', alamat_koperasi='$alamat_koperasi', desa='$desa', kecamatan='$kecamatan', kota='$kota', provinsi='$provinsi', kodepos='$kodepos', telepon_koperasi='$telepon_koperasi', email_koperasi='$email_koperasi'
        WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);   
}

function ubahUser($data){
    global $koneksi;
    $id=$data["id"];
    $nama=htmlspecialchars($data["nama"]);
    $username=htmlspecialchars($data["username"]);
    $password=htmlspecialchars($data["password"]);
    $level=htmlspecialchars($data["level"]);
    $email=htmlspecialchars($data["email"]);
    $telepon=htmlspecialchars($data["telepon"]);
    $lembaga=htmlspecialchars($data["lembaga"]);
    $status=htmlspecialchars($data["status"]);

    $query="UPDATE tb_users SET nama='$nama', username='$username', password='$password', level='$level', email='$email', telepon='$telepon', lembaga='$lembaga', status='$status' WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);   
}

function tambahPengguna($data) {
	global $koneksi;
	 // ambil data dari tiap inputan
    $nama=htmlspecialchars($data["nama"]);
    $username=htmlspecialchars($data["username"]);
    $password=htmlspecialchars($data["password"]);
    $level=htmlspecialchars($data["level"]);
    $email=htmlspecialchars($data["email"]);
    $telepon=htmlspecialchars($data["telepon"]);
    $lembaga=htmlspecialchars($data["lembaga"]);
    $status=htmlspecialchars($data["status"]);

    $query="INSERT INTO tb_users 
            VALUES 
        ('', '$nama', '$username', '$password', '$level','$lembaga', '$email', '$telepon', '$status')
        ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapusKoperasi($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM data_koperasi WHERE id = $id");
	
	return mysqli_affected_rows($koneksi);
}
function hapusUser($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_users WHERE id = $id");
    
    return mysqli_affected_rows($koneksi);  
}
 ?>
