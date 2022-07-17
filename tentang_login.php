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
			  <li><a href="index_login.php" class="scroll-link">Home</a></li>
			  <li class="active"><a href="tentang_login.php" class="scroll-link">Hepatitis</a></li>
			  <li><a href="tes_login.php" class="scroll-link">Tes</a></li>
			  <li><a href="team_login.php" class="scroll-link">Team</a></li>
			  <li><a href="Logout.php" class="scroll-link">Logout</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>TENTANG HEPATITIS</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
      	<img src="img/hepatitis.png" class="img-circle delay-03s animated wow zoomIn" alt=""><br/><br/><br/><br/><br/>
      	<img src="img/hepatitis2.png" class="img-circle delay-03s animated wow zoomIn" alt="">
      </div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
				<h3>Berikut adalah penjelasan secara umum tentang penyakit Hepatitis</h3><br/> 
				<p>Hepatitis adalah kelaian hati berupa peradangan (sel)hati. Peradangan ini ditandai dengan peningkatan kadar enzim hati. Peninkatan ini disebabkan adanya gangguan atau kerusakan embran hati. Ada dua faktor penyebabnya, yaitu faktor infeksi dan non infeksi. Faktor penyebab infeksi antara lain virus hepatitis atau bakteri. Selain dikarenakan virus hepatitis A,B,C,D dan E, masih banyak virus misalnya,adenoviruses,CMV, Herpes simplex, HIV, rubella, varicella dan   lain-lain..</p> <br/>
				<p>Sedangkan bakteri yang bisa hepatitis, misalnya, bakteri Salmonella typhi, Salmonella paratyphi, tuberkulosis, leptospira. Faktor non infeksi misalnya karena obat. Obat tertentu dapat mengganggu fungsi hati dan menyebabkan hepatitis. Virus yang menyebabkan penyakit ini berada dalam cairan tubuh manusia yang sewaktu-waktu bisa ditularkan ke orang lain. Memang sebagian orang yang terinfeksi virus ini bisa sembuh dengan sendirinya, namun demikian virus ini akan menetap dalam tubuh seumur hidup.</p><br/>
				<p> Macam - Macam Hepatitis :</p><br/>
				<p> Hepatitis A</p>
					<p>
					Jenis penyakit yang menyerang hati tersebut yang pertama adalah hepatitis A atau HAV. Virus penyebab gangguan ini terdapat di dalam kotoran seseorang yang telah terinfeksi dan paling sering ditularkan melalui konsumsi air atau makanan yang telah mengalami kontaminasi. Infeksi yang terjadi umumnya hanya ringan dan cepat pulih, tetapi juga dapat berkembang menjadi parah dan mengancam nyawa. Umumnya, penyakit ini terjadi pada daerah dengan sanitasi yang buruk.
					</p><br/>
				<p> Hepatitis B</p>
					<p>
					Gangguan yang kedua dapat menyerang hati adalah hepatitis B. Perbedaan hepatitis ini dengan yang lainnya adalah penularannya melalui paparan darah, air mani, hingga cairan tubuh lainnya. Selain itu, HBV juga dapat ditularkan ke bayi melalui air susu ibunya. Selain itu, transfusi darah dan berbagi suntikan narkoba juga dapat menjadi salah satu penyebab. Gangguan ini dapat lebih parah dibandingkan HBA, karena dapat menyebabkan kanker hati yang parah. Penting untuk mendapatkan vaksin agar tubuh lebih kebal, sehingga tidak mudah terserang.
					</p><br/>
				<p> Hepatitis C</p>
					<p>
					Perbedaan penularan hepatitis C dengan yang lainnya adalah melalui paparan darah yang terinfeksi, seperti transfusi darah, injeksi, dan penggunaan narkoba suntik. Penularan HCV pada dasarnya sama dengan HBV. Selain itu, penularan melalui kegiatan seksual juga dapat terjadi meski terbilang lebih jarang. Sejauh ini belum ada vaksin yang digunakan untuk menangkal HCV.
					</p><br/>
				<!--<p> Hepatitis D</p>
					<p>
					Gangguan ini hanya terjadi pada seseorang yang sedang mengalami infeksi dari hepatitis B. Infeksi ganda yang disebabkan oleh hepatitis D dan hepatitis B dapat menimbulkan penyakit yang lebih serius, bahkan sangat parah. Namun, ketika kamu mendapatkan vaksin hepatitis B ini dapat memberikan perlindungan efektif dari infeksi hepatitis D.
					</p><br/>
				<p> Hepatitis E</p>
					<p>
					Penyebaran virus hepatitis E pada dasarnya sama dengan hepatitis A, yaitu melalui konsumsi air atau makanan yang telah terkontaminasi. HEV adalah penyebab yang paling umum terjadi di negara berkembang. Maka dari itu, sangat disarankan untuk mendapatkan vaksin pencegahan penyakit ini jika memadai.
					</p><br/>
			</div>
			<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn1">Kerja Sistem</a> </div> 
			-->      
	   </div>
      	
	</div>
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 
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