<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<meta charset="utf-8"/>
	<title>sentech-admin-systeme</title>

	<!-- LIENS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://kinsta.com/fr/blog/polices-modernes/#6-lucky">

	<style type="text/css">

    #container_adm
    {
      margin-bottom: 50px;
    }

    

    .header_adm {
      color: #fff;
      padding: 20px;
      margin-bottom: 45px;
      background-color: black;
      border: 10px double orange;
      border-radius: 30px;
    }
    header h1
    {
      font-family: Bernard MT Condensed;
      color: white;
      letter-spacing: 10px;
      font-variant: small-caps;
      text-align: center;
    }



    #content_adm 
    {
      display: flex;
      justify-content: space-between;
      align-items: stretch;
      flex-wrap: wrap;
      width: 90%;
      margin: 60px auto;
      text-align: center;
    }
    #content_adm .column {
      flex-basis: calc(33.33% - 20px);
      margin: 10px;
      border: 3px solid orange;
      border-radius: 30px;
      overflow: hidden;
      background-color: black;
      color: white;
      position: relative;
      transition: all 0.5s ease-in-out;
    }
    #content_adm .column:hover {
      transform: scale(1.1);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
    }
    #content_adm .column .tof
    {
      margin: 10px;
      width: 200px;
      height: 200px;
      border-radius: 30px;
      box-shadow: 5px 5px 8px white;
    }
    #content_adm .column h2 {
      font-size: 2.5em;
      letter-spacing: 3px;
      font-family: Bernard MT Condensed;
      margin: 30px 0;
      font-variant: small-caps;
      font-weight: bold;
    }
    #content_adm .column p {
      text-align: justify;
      padding: 10px;
      font-size: 20px;
      line-height: 45px;
    }


    @media screen and (max-width: 800px)
    {
      #content_adm
      {
        flex-direction: column;
      }
      #content_adm .column
      {
        margin-bottom: 50px;
      }
    }
    @media screen and (max-width: 800px)
    {
       header h1
      {
      font-family: Bernard MT Condensed;
      color: white;
      letter-spacing: 5px;
      font-variant: small-caps;
      text-align: center;
      }

      #content_adm .column {
  
      margin-bottom: 70px;
      
    }
    }
	</style>

</head>


<body>

<?php  
include 'ENTETE_PIED/header.php';
?>

<hr id="ligne">


<main id="container_adm">
	
  <header class="header_adm">
    <h1>
      ADMINISTRATION SYSTEME
    </h1>
  </header>

  <div id="content_adm">

    <div class="column">
      <img src="medias/ad_sys.jpg" alt="" class="tof">
      <h2>configuration reseau</h2>
        <p>
          Le reseau est une discipline qui occupe bien sa place dans le monde des tics car chaque structure quelqu'en soit son statut sa dimension utilise un reseau. <br><br>
          Cest qui fait que SENTECH vous propose quelques services via les reseau informatique. <br><br>
          Nous vous proposons de faire l'etude de votre systeme en prenant compte de vos desirs pour installer vos equipements systemes. <br><br>
          Par la suite de pouvoir installer le type de reseau que vous voulez. <br><br>
          Aussi et sertout configurer les differentes services que vous voullez pour le reseau fonctionne est que la communication entre vos personnels se passe bien.

        </p>
      </div>

      <div class="column">
        <img src="medias/photo1.jpg" class="tof">
        <h2>maintenance informatique</h2>
        <p>
          Pour qu'un reseau (decrit precedement) puisse fonctionner il faut préalable que le systeme qui le supporte soit fonctionnel. <br><br>
          Nous sous entendons par là que les machines clients et serveurs doivent etre en constante maintenance. <br><br>
          Nous installons des machines avec n'importe quel systeme en meme temps une installation dual-boot ou virtuel. <br><br>
          En cas de complication pour les reglages et parametrages nous seront disponible. <br><br>
          De meme qu'en cas de panne nous pouvons vous aidez a le reparer ou le changé.
        </p>
      </div>

      <div class="column">
        <img src="medias/photo2.jpg" class="tof">
        <h2>plus</h2>
        <p>Comme le domaine des reseaux est large vous pouvez toujours nous solliciter pour vous aidez.</p>
      </div>
    </div>


  </main>




<?php  
include 'ENTETE_PIED/footer.php';
?>

</body>
</html>