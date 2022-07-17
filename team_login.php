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
			  <li><a href="tentang_login.php" class="scroll-link">Hepatitis</a></li>
			  <li><a href="tes_login.php" class="scroll-link">Tes</a></li>
			  <li class="active"><a href="team_login.php" class="scroll-link">Team</a></li>
			  <li><a href="Logout.php" class="scroll-link">Logout</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 


<section class="page_section team" id="team"><!--main-section team-start-->
	<div class="container">
    <h2>TEAM</h2>
    <h6>Daftar Dokter Pakar Hepatitis</h6>

		<div class="member-area">
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Eka Ryan Saputra
												</h4>
												<span class="designation">
													191336300009
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Candra Nur Azizah
												</h4>
												<span class="designation">
													191336300011
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Nadia Falakhis S.
												</h4>
												<span class="designation">
													191336300015
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Tasya Rafiiqa
												</h4>
												<span class="designation">
													191336300017
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->

										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Fitri Hariyanti
												</h4>
												<span class="designation">
													191336300027
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Nurul Alya Ghazalah
												</h4>
												<span class="designation">
													191336300031
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Syifa Kania Mumtaz
												</h4>
												<span class="designation">
													191336300041
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Putri Yuli Ambarani
												</h4>
												<span class="designation">
													191336300044
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->		
		</div>
</div>
</section>

<section class="page_section team" id="team"><!--main-section team-start-->
	<div class="container">
		<div class="member-area">
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Diah Ayu Pitaloka
												</h4>
												<span class="designation">
													191336300002
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Amanda Ayu Rizkya
												</h4>
												<span class="designation">
													191336300023
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													M. Raihan Zulfikar
												</h4>
												<span class="designation">
													191080200030
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Miftakhul Hadi
												</h4>
												<span class="designation">
													191080200058
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->

										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Mochammad Septa Sandy
												</h4>
												<span class="designation">
													191080200059
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Nicky Ibrahim Pamungkas
												</h4>
												<span class="designation">
													191080200079
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Anastasyah Nadia Putri
												</h4>
												<span class="designation">
													191080200029
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Rusdy Yusmiawan Putra
												</h4>
												<span class="designation">
													191080200029
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->		
		</div>
</div>
</section>
<section class="page_section team" id="team"><!--main-section team-start-->
	<div class="container">
		<div class="member-area">
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Diah Ayu Pitaloka
												</h4>
												<span class="designation">
													191336300002
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Amanda Ayu Rizkya
												</h4>
												<span class="designation">
													191336300023
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Manajemen Kesehatan Fakultas Kesehatan Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated" >
								<div class="member-container" data-wow-delay=".5s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Mujaddidul Islam
												</h4>
												<span class="designation">
													191080200032
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".7s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Mochamad Surohadi
												</h4>
												<span class="designation">
													191080200046
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->
					<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->

										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Agung Izulkhaq
												</h4>
												<span class="designation">
													191080200061
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<img class="img-circle" src="img/umsida.png" alt="Team Menber">
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Wisnu Mardiasyah
												</h4>
												<span class="designation">
													191080200112
												</span>
											</div><!-- /.member-top -->
											<p>
												Mahasiswa Prodi Informatika Fakultas Sains dan Teknologi Universitas Muhammadiyah Sidoarjo.
											</p>
											<form class="form" method="POST" action="hubungi.php">
												<input class="input-btn" type="submit" value="HUBUNGI">
          									</form>
          									<br/>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
					</div><!-- /.row -->		
		</div>
</div>
</section>
<!--/Team-->

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
    <div class="footer_bottom"><span>Copyright © 2022 <a href="index.php">kelompok 7 HEPCARE</a>. </span> </div>
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