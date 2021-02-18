<!DOCTYPE html>
<html>
<head>
	<title>latihan autofill</title>
</head>
<body>
	<form action="">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" id="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" id="nama" disabled></td></tr>
                <tr><td>JENIS KELAMIN</td><td><input type="text" id="jeniskelamin" disabled></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" id="jurusan" disabled></td></tr>
                <tr><td>NO TELP</td><td><input type="text" id="notelp" disabled></td></tr>
                <tr><td>EMAIL</td><td><input type="text" id="email" disabled></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" id="alamat" disabled></td></tr>
            </table>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"nim="+nim ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jeniskelamin').val(obj.jeniskelamin);
                    $('#jurusan').val(obj.jurusan);
                    $('#notelp').val(obj.notelp);
                    $('#email').val(obj.email);
                    $('#alamat').val(obj.alamat);
                });
            }
        </script>
</body>
</html>