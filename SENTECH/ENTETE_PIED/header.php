<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<meta charset="utf-8"/>
	<title>sentech-header</title>

	<!-- LIENS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://kinsta.com/fr/blog/polices-modernes/#6-lucky">

	<!-- STYLES -->
	<style type="text/css">

		/* GENERAL */
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}



		/*  SLIDER  */
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 100%;
			margin: auto;
		}
		.slide
		{
			background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('MEDIAS/0.jpg');
		}
		.carousel-caption h3
		{
			color: orange;
			font-size: 55px;
			font-variant: small-caps;
			font-style: italic;
			font-weight: bold;
			font-family: Broadway;
			letter-spacing: 12px;
		}


		#ligne
		{
			margin-top: 3px;
			margin-bottom: 3px;
			border-radius: 15px;
			border: 2px solid black;
			height: 15px;
			background-color: orange;
		}

		/*	MENU  */
		.menu
		{
			height: 120vh;
			animation: anime 25s linear infinite;
			transition: 0.5s;
		}



		/*  SMENU  */
		.smenu
		{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			font-family: Bernard MT Condensed;
		}
		.smenu img
		{
			width: 150px;
			height: 150px;
		}
		@keyframes anime
		{
			0%
			{
				background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('MEDIAS/photo1.jpg');
				background-size: cover;
				background-position: center;
			}
			25%
			{
				background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('MEDIAS/photo2.jpg');
				background-size: cover;
				background-position: center;
			}
			50%
			{
				background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('MEDIAS/photo3.jpg');
				background-size: cover;
				background-position: center;
			}
			100%
			{
				background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('MEDIAS/photo4.jpg');
				background-size: cover;
				background-position: center;
			}
		}
		.menu .smenu #logo
		{
			border-radius: 50%;
			margin-top: 30px;
		}
		.menu .smenu .nav ul
		{
			display: flex;
			align-items: center;
			flex-direction: row;
			justify-content: center;

		}
		.menu .smenu .nav ul li
		{
			padding-top: 75px;
			list-style: none;
		}
		.menu .smenu .nav ul li a
		{
			text-decoration: none;
			margin-right: 30px;
			font-size: 25px;
			border: 3px groove orange;
			padding: 5px;
			border-radius: 15px;
			color: white;
			position: relative;
			font-variant: small-caps;
		}
		.menu .smenu .nav ul li a::after
		{
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: "";
			width: 0%;
			height: 100%;
			z-index: 1000000;
			opacity: 0.7;
			border-radius: 15px;
			transition: 0.7s;
			background-color: orange;
		}
		.menu .smenu .nav ul li a:hover::after
		{
			width: 100%;
		}



		/*  CONTENU  */
		.content
		{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin-top: 100px;
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
		}
		.content .btn
		{
			margin-bottom: 35px;
		}
		.content .btn button
		{
			padding: 6px 15px;
			border-radius: 15px;
			border: 5px groove orange;
			color: white;
			font-size: 40px;
			background: none;
			position: relative;
		}
		.content .btn .btn1
		{
			margin-right: 45px;
		}
		.content .btn .btn2
		{
			margin-left: 45px;
		}
		.content .btn button::after
		{
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: "";
			width: 0%;
			height: 100%;
			z-index: 1000000;
			opacity: 0.7;
			border-radius: 15px;
			transition: 0.7s;
			background-color: orange;
		}
		.content .btn button:hover::after
		{
			width: 100%;
		}

		.content p{
			color: white;
			width: 70%;
			margin: auto;
			text-align: center;
			font-variant: small-caps;
			font-style: italic;
			font-family: verdana;
			font-weight: bold;
			font-size: 30px;
			letter-spacing: 10px;
			box-shadow: 5px 5px 5px orange;
		}
		.abonne
		{
			margin: 18px;
			padding: 0;
			color: white; 
			font-size: 25px;
		}




		@media screen and (max-width: 1200px)
		{
			.menu
			{
				height: 150vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				width: 100%;
			}
			.menu .smenu #logo
			{
				width: 100px;
				height: 125px;
			}
			.menu .smenu nav
			{

			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 5px;
				font-size: 25px;
			}

		}


		@media screen and (max-width: 1000px)
		{
			.menu
			{
				height: 175vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				width: 100%;
			}
			.menu .smenu #logo
			{
				width: 100px;
				height: 125px;
			}
			.menu .smenu nav
			{
				
			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 3px;
				font-size: 20px;
			}
		}
		

		@media screen and (max-width: 800px)
		{
			.menu
			{
				height: 175vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				width: 100%;
			}
			.menu .smenu #logo
			{
				width: 100px;
				height: 125px;
			}
			.menu .smenu nav
			{
				
			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 2px;
				font-size: 13px;
			}
			.carousel-caption h3
			{
			
			font-size: 40px;
			
			}
		}


			@media screen and (max-width: 600px)
			{
			.menu
			{
				height: 175vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				width: 100%;
			}
			.menu .smenu #logo
			{
				width: 100px;
				height: 125px;
			}
			.menu .smenu nav
			{
				
			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 0px;
				font-size: 10px;
			}
			.content .btn button
		    {
		
			font-size: 30px;
		
			}
		}	


		@media screen and (max-width: 477px)
		{
			.menu
			{
				height: 175vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				width: 100%;
			}
			.menu .smenu #logo
			{
				width: 50px;
				height: 50px;
			}
			.menu .smenu nav
			{
				margin-top: -30px;				
			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 0px;
				font-size: 10px;
			}
			.content p{
			
			font-size: 20px;
		
			}
			.carousel-caption h3
			{
			
			font-size: 35px;
		
			letter-spacing: 6px;
			}
		}

		@media screen and (max-width: 421px)
		{
			.menu
			{
				height: 175vh;
			}
			.menu .smenu
			{
				justify-content: space-around;
				margin: 0 auto;
				display: flex;
				flex-direction: column;
				width: 100%;
				align-items: center;
			}
			.menu .smenu #logo
			{
				width: 100px;
				height: 100px;
				margin: 5px 0 -35px 0;

			}
			.menu .smenu nav
			{
				
			}
			.menu .smenu .nav ul
			{
				justify-content: center;
				margin: 2px auto;
			}
			.menu .smenu .nav ul li
			{
			}
			.menu .smenu .nav ul li a
			{
				width: 25px;
				margin: 0 0px;
				font-size: 10px;
				border: 0.5px solid orange;
			}
			.content p{
			
			font-size: 20px;
		
			}
		}
			
		
	</style>
</head>


<body>

	<header class="header">
			

		<!-- SLIDER -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
 
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="MEDIAS/ad_sys.jpg" alt="Creation site web" style="height: 400px">
					<div class="carousel-caption">
						<h3>adminitration systeme</h3>
					</div>
				</div>

				<div class="item">
					<img src="MEDIAS/creation.jpg" alt="creation_site_web" style="height: 400px">
					<div class="carousel-caption">
						<h3>creation site web</h3>
					</div>
				</div>

				<div class="item">
					<img src="MEDIAS/design.jpg" alt="design" style="height: 400px">
					<div class="carousel-caption">
						<h3>design</h3>
					</div>					
				</div>

				<div class="item">
					<img src="MEDIAS/cours.jpg" alt="cours_informatique" style="height: 400px">
					<div class="carousel-caption">
						<h3>cours informatique</h3>
					</div>					
				</div>

				<div class="item">
					<img src="MEDIAS/autres.jpg" alt="others_services" style="height: 400px">
					<div class="carousel-caption">
						<h3>autres services</h3>
					</div>					
				</div>

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Précédent</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div>
		</div>


		<hr id="ligne">



		<!-- LOGO ET MENU -->
		<div class="menu">
			
			<!-- SMENU -->
			<div class="smenu">

				<img src="MEDIAS/logo aziz.png" alt="notre logo" id="logo" />

				<nav class="nav">
					<ul>
						<li><!-- <span class="fa fa-home"></span> --><a href="index.php">home</a></li>
						<li><a href="creation_application.php">creation application</a></li>
						<li><a href="cours_informatique.php">cours informatique</a></li>
						<li><a href="admin_sys.php">administration systeme</a></li>
						<li><a href="design.php">design</a></li>
						<li><a href="discussion.php">chat</a></li>
						<li><a href="apropos.php">a-propos</a></li>
					</ul>
				</nav>
			</div>



			<!-- CONTENT -->
			<div class="content">
				<div class="btn">
					<button class="btn1" type="button" id="bouton-abonnement">s'abonner</button>
					<button class="btn2" type="button" id="bouton-desabonnement">desabonner</button>
				</div>
				<div class="abonne">
					<?php  
					$host = "localhost";
					$user = "root"; 					
					$password = ""; 
					$dbname = "chat"; 

					$conn = mysqli_connect($host, $user, $password, $dbname);

					if (!$conn) {
					    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
					}


					$sql = "SELECT nom FROM abonnes"; 
					$result = mysqli_query($conn, $sql);

					$count =25678;
					$count2 = 0;
					while ($row = mysqli_fetch_assoc($result)) {
						$count++;
					}
					echo $count. ' abonné(e)s';

					?>
				</div>
				<p>
					La satisfaction de nos prospects est notre priorité c'est ce qui fait meme l'idéologie du site.	<br>
					ne vous passer surtout pas de nos divers services.
				</p>
			</div>

		</div>


	</header>




<script>
/* TRAIMENT AJAX ABONNEMENT */
document.addEventListener('DOMContentLoaded', function() {
    var boutonAbonnement = document.getElementById('bouton-abonnement');
    boutonAbonnement.addEventListener('click', function(event) {
        event.preventDefault();
        var nom = prompt("Entrez votre nom :");
        var email = prompt("Entrez votre email :");
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'traitAbonne.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            } else {
                console.log('Erreur : ' + xhr.statusText);
            }
        };
        xhr.send('nom=' + encodeURIComponent(nom) + '&email=' + encodeURIComponent(email));

        location.reload();
    });
});



/* TRAIMENT AJAX DESABONNEMENT */
document.addEventListener('DOMContentLoaded', function() {
    var boutonAbonnement = document.getElementById('bouton-desabonnement');
    boutonAbonnement.addEventListener('click', function(event) {
        event.preventDefault();
        var nom = prompt("Entrez votre nom :");
        var email = prompt("Entrez votre email :");
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'traitDesabonne.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            } else {
                console.log('Erreur : ' + xhr.statusText);
            }
        };
        xhr.send('nom=' + encodeURIComponent(nom) + '&email=' + encodeURIComponent(email));

        location.reload();
    });
});

</script>
</body>
</html>