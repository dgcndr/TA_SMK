<!DOCTYPE html>
<?php 
include 'koneksi.php';
 ?>
<head>
	<meta charset="utf-8">
	<title>D-Movie</title>
	<meta name="description" content="Movies Information">
	<meta name="author" content="www.d-movie.co.id">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/degi.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/responsiveslides.css" />
	<link href='./images/icon.png' rel='icon' type='shorcut icon'/>
</head>
<body>
<header> 
	<div id="logo"><a href="index.html"><img src="images/logo1.png"/></a></div>
	
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="review.html">Reviews</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="download.html">Download</a></li>
			<li><a class="underline" href="contact.php">Contact</a></li>
		</ul>
	</nav>
</header>

<div class="social">
		<div class="shareicons">
			<ul>
				<li><a href="http://facebook.com/cvleonic">Facebook</a></li>
				<li><a href="http://twitter.com/chakaVR">Twitter</a></li>
			</ul>
		</div>
</div>

<section id="content">
	<div class="zerogrid block">
		<div class="row block02">
				<div class="col16">
					<section class="judul">
						<p>Contact</p>
					</section>
				</div>
		</div>
		<div class="row block01">
			<div class="contact">
				<section>
					<article>
					<div class="content">
						<br>
						<div id="databorder">
						<img class="ddevelopt" src="images/data.png" width="200px" height="400px" class="imgdata">
						<p align="left" class="datadiri">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : chakavr@d-movies.com
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone : 08960133057
						<br>
						</p>
						</div>
						<br><br>
						<div class="sosmed" align="left">
							<a class="sotek" href="facebook.com/cvleonic"><img src="images/wallpaper/ikon/fb.png"> Facebook </a><br><br>
							<a class="sotek" href="twitter.com/chakaVR"><img src="images/wallpaper/ikon/twit.png"> Twitter </a><br><br>
							<a class="sotek"  href="youtube.com/VRchaka"><img src="images/wallpaper/ikon/yt.png"> Youtube </a><br><br>
							<a class="sotek"  href="instagram.com/chakavr"><img src="images/wallpaper/ikon/ig.png"> Instagram </a><br><br>
							<a class="sotek"  href="soundcloud.com/chakaVR"><img src="images/wallpaper/ikon/sc.png"> SoundCloud </a><br><br><br>
							<img src="images/wallpaper/ikon/line.png"><a class="sotek"> Line : chakaVR </a><br><br>
							<img src="images/wallpaper/ikon/ym.png"><a class="sotek"> YM : degick@ymail.com </a><br><br>
						</div>
						<br>
						<br>
						<br>
						<hr><hr>
						<div id="publishcomment" align="left">
					    <?php include("publishcomment.php"); getcomment("1"); ?></div>
					    <div id="comment">
					    <form name="submitcomment" method="post" action="submitcomment.php" align="left">Nama:<br>
					    <input name="nama" type="text"><br>
					    Email:<br><input name="email" type="text"><br>
					    Website:<br><input name="website" type="text"><br>
					    Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
					    <input name="art_id" value="1" type="hidden">
					    <input name="art_url" value="contact.php" type="hidden"><br>
					    <input name="tombol" value="Kirim" type="submit" class="tombol"></form></div>
					    </div>
					</div>
					</article>
				</section>
					</div>
			</div>
		</div>
<footer>
	<div class="wrapfooter">
	<p>Copyright © 2013 - <a href="index.html" target="_blank">D-movie</a> by <a href="contact.php" target="_blank">Degi Candra Kamarullah</a></p>
	</div>
</footer>

</body>
</html>