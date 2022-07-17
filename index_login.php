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
			  <li class="active"><a href="index_login.php" class="scroll-link">Home</a></li>
			  <li><a href="tentang_login.php" class="scroll-link">Hepatitis</a></li>
			  <li><a href="tes_login.php" class="scroll-link">Tes</a></li>
			  <li><a href="team_login.php" class="scroll-link">Team</a></li>
			  <li><a href="logout.php" class="scroll-link">Logout</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    	<?php
		if (isset($_GET['valid'])){
			echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<strong>PERHATIAN!</strong> User ID atau Password Salah.Hanya User yang terdaftar yang dapat mengakses layanan \"TES HEPATITIS\".";
			echo "</div>";
		}
		
		if (isset($_GET['mail'])){
			$mail = $_GET['mail'];
			
			switch ($mail){
				case 'gagal':
				echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL GAGAL TERKIRIM!</strong> cek kelengkapan pengisian";
				echo "</div>";
				break;
				
				case 'sukses':
				echo "<div class=\"alert alert-success\" style=\"position:fixed; width:100%;\">";
				echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
				echo "<strong>EMAIL TERKIRIM!</strong> email anda sudah terkirim ke database kami, terimakasih";
				echo "</div>";
				break;
			}
		}
	?>
	<div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Selamat datang di <br/>
                <img src="img/logo1.png">
                <br/>
                 (Hepatitis Care)</h1>
              <p>Hepcare merupakan Pelayanan untuk penyakit Hepatitis berbasis web. Hepcare bertujuan untuk memberikan informasi kepada masyarakat luas tentang apa itu Hepatitis serta langkah apa saja yang harus dilakukan jika memang ada yang mengidap penyakit tersebut.</p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div>
			<img src="img/dokter1.png" class="bannerImg zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->  

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>LAYANAN</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <a href="tentang_login.php">
              <div class="service_icon delay-03s animated wow  zoomIn"><img src="img/sharing.png"/></div>
                <h3 class="animated fadeInUp wow">Sharing</h3>
                <p class="animated fadeInDown wow">Hepcare membagikan informasi kepada masyarakat tentang apa itu Hepatitis, penyebab serta dampaknya. Sehingga masyarakat dengan mandiri dapat melakukan pencegahan maupun cara penanganan yang tepat bagi penderita.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <a href="tes_login.php">
              <div class="service_icon icon  delay-03s animated wow zoomIn"><img src="img/diagnosis.png"/></div>
                <h3 class="animated fadeInUp wow">Diagnosa</h3>
                <p class="animated fadeInDown wow">Hepcare menyediakan layanan untuk melakukan cek atau diagnosa secara mandiri bagi masyarakat.</p>
              </a>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <a href="team_login.php">
              <div class="service_icon icon  delay-03s animated wow zoomIn"><img src="img/consultation.png"/></div>
                <h3 class="animated fadeInUp wow">Konsultasi</h3>
                <p class="animated fadeInDown wow">Hepcare menyediakan tempat untuk berkonsultasi dengan pakar Hepatitis sehingga masyarakat lebih leluasa untuk melakukan tanya jawab terkait penyakit Hepatitis.</p>
            </a>
          </div>
        </div>
      </div>
	   </div>
  </div>
</section>
<!--Service-->

<!--Footer-->
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
    <div class="footer_bottom"><span>Copyright © 2022 <a href="index.php">Kelompok 7 HAPCARE</a>. </span> </div>
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