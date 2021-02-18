<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>kopramsi: Rasio</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include 'sidebar.php'; ?>
<!-- / sidebar -->

    <?php include 'header.php'; ?>
<!-- / header -->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body p-b-0">
									<h1 class="card-title text-right mb-3"><i>PENILAIAN KESEHATAN KOPERASI</i></h1>
									<!-- Nav tabs -->
									<ul class="nav nav-tabs customtab2" role="tablist">
										<li class="nav-item datakuantitatif"> 
                                            <a class="nav-link active bg-warning" data-toggle="tab" href="#inputDataKuantitatif" role="tab">
                                                <span class="hidden-sm-up"><i class="ti-pie-chart"></i></span>
                                                <span class="hidden-xs-down"> Data Kuantitatif</span>
                                            </a> 
                                        </li>
                                        <li class="nav-item datakualitatif"> 
                                            <a class="nav-link  bg-warning" data-toggle="tab" href="#datakualitatif" role="tab">
                                                <span class="hidden-sm-up"><i class="ti-notepad"></i></span>
                                                <span class="hidden-xs-down"> Data Kualitatif</span>
                                            </a> 
                                        </li>
									</ul>	
                                    <!-- / nav tab -->

                                    <!-- tab konten -->
									<div class="tab-content">
                                        <!-- tab pane data kuantitatif -->
										<div class="tab-pane  p-20 active" id="inputDataKuantitatif" role="tabpanel">

											<?php include 'formulir/data-kuantitatif.php'; ?>

                                        </div>
                                        <!-- / tab pane data kuantitatif -->

                                        <!-- tab pane datakualitatif -->
                                        <div class="tab-pane p-20" id="datakualitatif" role="tabpanel">
                                            <?php include 'formulir/data-kualitatif.php'; ?>
                                        </div>
                                        <!-- / tab pane datakualitatif -->
                                    </div>
                                    <!-- / tab konten -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			     <!-- / row -->

                <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2021 © Pramono. - <a href="#">monotech.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
    	   </div>
        </div>
    </div>	

    <!-- jquery vendor -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- myscript -->  
    <script src="assets/js/script-saya.js"></script>
    
</body>

</html>