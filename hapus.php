<?php 
include 'function.php';
// tangkap id dari url
$id=$_GET["id"]; 

if(hapusKoperasi($id) > 0 ) {
    echo "
        <script>    
            alert('data berhasil dihapus');
            document.location.href= 'data_koperasi.php';
        </script>" ;
} else {
	echo "
        <script>
            alert('data gagal dihapus');
            document.location.href= 'data_koperasi.php';
        </script>";

}

 ?>