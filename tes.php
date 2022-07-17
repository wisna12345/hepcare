<!doctype html>

<?php
	include_once 'config.php';
	unset ($_SESSION['keluhan']);
	unset ($_SESSION['jumlah_keluhan']);
	unset ($_SESSION['n_atas1']);
	unset ($_SESSION['n_atas2']);
	unset ($_SESSION['n_atas3']);
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Hepcare</title>
<link rel="icon" href="favicon1.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<script href="js/datepicker.js"></script>
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="img/logo2.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li><a href="index.php" class="scroll-link">Home</a></li>
			  <li><a href="tentang.php" class="scroll-link">Hepatitis</a></li>
			  <li class="active"><a href="tes.php" class="scroll-link">Tes</a></li>
			  <li><a href="team.php" class="scroll-link">Team</a></li>
			  <li><a href="login.php" class="scroll-link">Login</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--TesAsma-->
<section id="tes_asma">
<div class="inner_wrapper">
  <div class="container">
    <h2><strong>TES HEPATITIS<strong></h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/tes1.png" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3><strong>HEPCARE</strong> menyediakan layanan untuk mendiagnosa secara mandiri apakah anda mengidap Hepatitis atau tidak.</h3><br/> 
				<p>Keakuratan informasi yang diberikanpun tidak jauh berbeda dengan seorang dokter karena <strong>HEPATITIS CARE</strong> bekerja sama dengan pakar Hepatitis serta mengambil data dari jurnal - jurnal yang terkait. Untuk melakukan tes, anda akan diberikan beberapa pertanyaan tentang kondisi anda saat ini, dan di bagian akhir pertanyaan anda dapat melihat hasil serta rekomendasi dari sistem</p> <br/>
			</div>
			<?php
				if (!isset($_SESSION['user'])){
					include_once 'login-modal.php';
				}
				else if (isset($_SESSION['user'])){
					echo "<div class=\"work_bottom\"><a href=\"periksa.php\" class=\"contact_btn\">MULAI</a> </div>";
				}
			?>
	   </div>
	</div>
    </div>
  </div> 
  </div>
</section>
<!--TesAsma----> 

<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>METODE</h2>
        <div class="row">
          <div class="col-lg-4">
            <h2 style="font-size:20pt;">Pengetahuan</h2>
			<p style="text-align:justify;">Langkah paling awal untuk membuat sistem pakar adalah dengan menggali informasi tentang suatu masalah yang akan dipecahkan dengan bantuan seorang pakar maupun sumber pengetahuan lainya seperti buku.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Naive-Bayes</h2>
			 <p style="text-align:justify;">Data yang didaptakan dari pakar maupun buku berupa probabilitas tentang berapa orang pengidap penyakit Hepatitis A, Hepatitis B, serta Hepatitis C. Data ini kemudian digunakan untuk menentukan aturan sistem dalam menentukan keputusan.</p>
          </div>
          <div class="col-lg-4">
			 <h2 style="font-size:20pt;">Keakuratan</h2>
			 <p>Pada Sistem pakar ini (Hepcare), tingkat keakuratan masih belum maksimal karena data yang diperoleh masih sedikit sehingga masih belum dapat menggantikan pakar yang sesungguhnya.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2022 <a href="index.php">Kelompok 7 HEPCARE</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>