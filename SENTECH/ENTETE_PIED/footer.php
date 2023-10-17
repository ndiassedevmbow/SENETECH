<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<meta charset="utf-8"/>
	<title>sentech-footer</title>

	<!-- LIENS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style type="text/css">
		
		/* FOOTER */
		#containerFooter {
		  text-transform: lowercase;
		  background: rgba(0, 0, 0, 0.9);
		  color: #fff;
		  padding: 40px 0;
		  font-variant: small-caps;
		  display: flex;
		  flex-direction: row;
		  justify-content: space-around;
		  align-items: center;
		}

		
		#containerFooter h4 {
		  font-family: Bernard MT Condensed;
		  font-size: 30px;
		  letter-spacing: 5px;
		  margin-bottom: 20px;
		  position: relative;
		}
		#containerFooter h4::after {
		  position: absolute;
		  bottom: 0;
		  width: 0;
		  left: 0;
		  height: 3px;
		  content: '';
		  text-align: center;
		  background: orange;
		  border-radius: 6px;
		  transition: 0.35s;
		}
		#containerFooter h4:hover::after {
		  width: 40%;
		}

		#containerFooter p
		{
		  letter-spacing: 2px;
		}

		#containerFooter #inf
		{
			margin-top: 18px;
		}
		#containerFooter #soc
		{
			margin-top: -30px;
		}
		#containerFooter #coord
		{
		}

		#containerFooter #soc .reseau_soc li {
		  display: inline-block;
		  margin-right: 25px;
		}
		#containerFooter #soc .reseau_soc i {
		  font-size: 24px;
		  color: #fff;
		}

		

	@media screen and (max-width: 768px)
		{
			#containerFooter
			{
				flex-direction: column;
				text-align: center;
			}
			#containerFooter div {
       			margin-bottom: 40px;
    		}
    		#containerFooter #coord{
       			margin-bottom: 80px;
    		}
		}
	</style>
</head>




<body>

<!-- LIGNE SEPARATRICE -->
<hr id="ligne">

<!-- FOOTER -->
<footer id="containerFooter">

	<!-- INFOS -->
	<div id="inf">
        <h4>Infos</h4>
        <p>
        	&copy; avril 2023 <br>Localite: kaolack <br>Adresse: nimzatt <br> Developpe par Sentech <br>
        </p>
    </div>

    <!-- COORDONNES -->
    <div id="coord">
        <h4>Coordonnées</h4>
        <p>whatsapp: 78 278 24 20<br>Phone: 78 278 24 20.<br>Email: sentech2504@gmail.com</p>
    </div>

    <!-- RESEAUX SOCIAUX -->
    <div id="soc">
        <h4>Réseaux sociaux</h4>
        <ul class="reseau_soc">
          
          <li>
          	<a target="_blank" href="https://www.facebook.com/profile.php?id=100092075328977" target="_blank"><i class="fa fa-facebook"></i></a>
          </li>

          <li>
          	<a target="_blank" href="https://www.linkedin.com/in/sen~-tech-94b804274"><i class="fa fa-linkedin"></i></a>
          </li>

          <li>
          	<a target="_blank" href="https://wa.me/message/GLAVMPUQGUF2H1"><i class="fa fa-whatsapp"></i></a>
          </li>
          
          <li>
          	<a target="_blank" href="https://instagram.com/sen_tech_business?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
          </li>

          <li>
          	<a target="_blank" href="https://youtube.com/@SENTECH-lp5mw"><i class="fa fa-youtube" target="_blank"></i></a>
          </li>
        
        </ul>
    </div>

</footer>

</body>
</html>