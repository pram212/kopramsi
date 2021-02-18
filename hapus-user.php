<?php 
include 'function.php';
$id=$_GET["id"];

if(hapusUser($id) > 0 ) {
	echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href= 'pengguna.php';
        </script>";
} else {
	echo "
        <script>
            alert('data gagal dihapus');
            document.location.href= 'pengguna.php';
        </script>";

}

 ?>