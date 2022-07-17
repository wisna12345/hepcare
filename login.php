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
<title>Hepatitis</title>
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
        <li><a href="tes.php" class="scroll-link">Tes</a></li>
        <li><a href="team.php" class="scroll-link">Team</a></li>
        <li class="active"><a href="login.php" class="scroll-link">Login</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 


<!--daftar-->
<section id="daftar">
    <?php
    if (isset($_GET['berhasil'])){
      
      $berhasil = $_GET['berhasil'];
      
      switch ($berhasil){
        case '0':
        echo "<div class=\"alert alert-danger\" style=\"position:fixed; width:100%;\">";
        echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
        echo "<strong>GAGAL INPUT!</strong> User ID atau Password mungkin sudah pernah dipakai \"TES ASMA\".";
        echo "</div>";
        break;
        
        case '1':
        echo "<div class=\"alert alert-success\" style=\"position:fixed; width:100%;\">";
        echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
        echo "<strong>BERHASIL!</strong> Selamat anda sudah terdaftar menjadi member \"TES ASMA\".";
        echo "</div>";
        break;
        
      }
    }
  ?>
   <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>LOGIN</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
 
        <div class="col-lg-12 wow fadeInLeft delay-06s">
          <form class="form" method="POST" action="user-login.php">
            <h3>Username</h3>
            <input class="input-text" type="text" name="text_name" value="Username *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <h3>Password</h3>
            <input class="input-text" type="password" name="pass" value="password">
            <input class="input-btn" type="submit" value="LOGIN"><br/><br/>
          </form>
          <form class="form" method="POST" action="daftar.php">
            <p style="color:blue">Belum Punya Akun? daftar disini!</p>
            <input class="input-btn" type="submit" value="DAFTAR">
          </form>
        </div>
      </div>
    </section>
  </div>
</section>
<!--daftar-->


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
			 <p style="text-align:justify;">Data yang didaptakan dari pakar maupun buku berupa probabilitas tentang berapa orang pengidap penyakit asma akut, kronis, serta periodik. Data ini kemudian digunakan untuk menentukan aturan sistem dalam menentukan keputusan.</p>
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