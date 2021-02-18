<?php 
include 'function.php';

$id=$_GET["id"];

// query data koperasi berdasarkan id
$detailusers=query("SELECT * FROM tb_users WHERE id = $id")[0];

// cek apakah tombol edit sudah dipencet atau belom
if (isset($_POST["editUser"] ) ) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (ubahUser($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href= 'pengguna.php';
            </script>";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href= 'pengguna.php';
            </script>";
    }
}

 ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Koperasi</title>

    <!-- ================= Favicon ================== -->
    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/cssku.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<?php include 'sidebar.php'; ?>
<!-- /# sidebar -->

<!-- header -->
<?php include 'header.php'; ?>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <div class="row" id="kepala">
                    <div class="col-lg-4 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Data Identitas Saudara/i <?php echo $detailusers["nama"];  ?></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- card -->
                            <div class="card">
                               <form action=""  method="post">
                                <input type="hidden" name="id" value="<?php echo $detailusers["id"]; ?>">
                                <div class="row mb-3">
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autofocus="" name="nama" value="<?php echo $detailusers["nama"];  ?>">
                                        <label for="floatingInput" class="ms-2">Nama :</label>
                                    </div>
                                    <div class="form-floating col">
                                        <input type="number" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autofocus="" name="telepon" value="<?php echo $detailusers["telepon"];  ?>">
                                        <label for="floatingInput" class="ms-2">Telepon :</label>
                                    </div>
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" autofocus="" name="email" value="<?php echo $detailusers["email"];  ?>">
                                        <label for="floatingInput" class="ms-2">Email :</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatingJenisKoperasi" list="listlevel" placeholder="admin dinas" name="level" value="<?php echo $detailusers["level"];  ?>">
                                            <datalist id="listlevel">
                                                <option value="Admin Dinas">
                                                <option value="Admin Koperasi">
                                            </datalist>
                                        <label for="floatingJenisKoperasi" class="ms-2">Level :</label>
                                    </div>
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatingnikKoperasi" placeholder="name@example.com" name="username" value="<?php echo $detailusers["username"];  ?>">
                                        <label for="floatingnikKoperasi" class="ms-2">Username :</label>
                                    </div>
                                    <div class="form-floating col">
                                        <input type="password" class="form-control rounded-3" id="floatingpassword" placeholder="Telepon" name="password" value="<?php echo $detailusers["password"];  ?>">
                                        <label for="floatingpassword" class="ms-2">Kata Sandi :</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatinglembaga" placeholder="KSPPS Berkah Madani" name="lembaga" value="<?php echo $detailusers["lembaga"];  ?>">
                                        <label for="floatinglembaga" class="ms-2">Lembaga (Nama Koperasi)</label>
                                    </div>
                                    <div class="form-floating col">
                                        <input type="text" class="form-control rounded-3" id="floatingstatususer" list="listKelurahan" placeholder="status user" name="status" value="<?php echo $detailusers["status"];  ?>">
                                            <datalist id="listKelurahan">
                                                <option value="Aktif">
                                                <option value="Dalam Persetujuan">
                                                <option value="Nonaktif">
                                            </datalist>
                                        <label for="floatingstatususer" class="ms-2">Status :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="pengguna.php" type="button" class="btn btn-danger btn-sm btn-rounded" data-bs-dismiss="modal">Kembali
                                </a>
                                <button type="submit" name="editUser" class="btn btn-primary btn-sm btn-rounded">Ubah</button>
                            </div>
                            </form>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

<!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script> -->







</body>

</html>

