<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<meta charset="utf-8"/>
	<title>sentech-cours-inormatique</title>

	<!-- LIENS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		.conteneur_app
		{
			background: black;
			margin: -15px auto;
			width: 1200px;
		}
		.conteneur_app li
		{
			list-style-type: none;
			width: 100%;
			margin: 20px;
			padding: 35px;
			border-radius: 15px;
			background: orange;
			box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
						-6px -6px 10px -1px rgba(255, 255, 255, 0.7);
		}
		.conteneur_app li label
		{
			display: flex;
			align-items: center;
			padding: 10px;
			font-size: 28px;
			font-weight: 500;
			font-family: cursive;
			letter-spacing: 8px;
			cursor: pointer;
			margin-bottom: 25px;
		}
		label::before
		{
			content: '+';
			margin-right: 10px;
			font-size: 30px;
			font-weight: 600;
		}
		input[type="radio"]
		{
			display: none;
		}
		.conteneur_app .contenu
		{
			background: none;
			color: #555;
			padding: 0 10px;
			line-height: 36px;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.5s, padding 0.5s;
		}


		.conteneur_app input[type="radio"]:checked + label + .contenu
		{
			max-height: 400px;
			padding: 10px 10px 20px;
		}
		.conteneur_app input[type="radio"]:checked + label::before
		{
			content: '-'
		}






		.conteneur_app .label
		{
			font-variant: small-caps;
			font-family: Bernard MT Condensed;
			font-size: 45px;
			color: black;
		}
		.conteneur_app h1
		{
			font-family: Bernard MT Condensed;
			font-style: normal;
			font-size: 25px;
			color: black;
		}
		.conteneur_app p
		{
			font-family: Bernard MT Condensed;
			color: white;
			line-height: 45px;
			text-align: center;
			font-style: normal;
			font-size: 20px;

		}
		.conteneur_app .devweb
		{
			columns: 3 150px;
			text-align: center;
			column-rule: 3.5px groove black;
			column-gap: 25px;
		}
		.devweb .first
		{
			margin-top: -20px;
		}
		.conteneur_app .typeApp
		{
			columns: 3 150px;
			text-align: center;
			column-rule: 3.5px groove black;
			column-gap: 25px;
		}
		.typeApp .first
		{
			margin-top: -20px;
		}

		#titre
		{
			font-weight: 900;
			font-size: xx-large;
			color: black;
			font-style: italic;
			letter-spacing: 5px;
			background-color: white;
		}


		@media (max-width: 900px) {
        .conteneur_app {
            width: 90%;
            margin: 0 auto;
        }
        .conteneur_app .label
        {
        	font-size: 35px;
        }
        .conteneur_app li {
            margin: 10px;
            padding: 25px;
        }
        .conteneur_app p, .conteneur_app h1
        {
            font-size: 13px;
        }
    }

    @media (min-width: 768px) and (max-width: 1100px) {
        .conteneur_app {
            width: 90%;
            margin: 0 auto;
        }
        .conteneur_app li {
            margin: 10px;
            padding: 30px;
        }
    }

    
    @media (min-width: 1101px) {
        .conteneur_app {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
        }
        .conteneur_app li {
            margin: 10px;
            padding: 25px;
        }
    }

    @media (max-width: 475px) {
     .conteneur_app li label
		{
			
			font-size: 20px;
			
			letter-spacing: 0px;
		
		}
    }

    
	</style>

</head>

<body>


<?php  
include 'ENTETE_PIED/header.php';
?>


<hr id="ligne"></hr>


<ul class="conteneur_app">
	<li>
		<input type="radio" name="conteneur_app" id="primo" checked>
		<label for="primo" class="label">
			presentation
		</label>
		<div class="contenu">
			<p>
				<span id="titre">SENTECH</span> est une entreprise de prestataire de service qui peut vous faire migrer de l'analogie vers le numerique pour exploser vos audiences quotients. <br>
				Sur ce a travers cette section nous vous decrivons les types d'application et et devweb à utiliser pour realiser vos desirs d'avoir un site web ou mobile ou les deux à la fois.
			</p>
		</div>
	</li>

	<li>
		<input type="radio" name="conteneur_app" id="segundo">
		<label for="segundo" class="label">
			developpement web
		</label>
		<div class="contenu devweb">
			<div class="first">
				<h1>langages</h1>
				<p>
					Seront enseignés : 
					Langage front end : <mark><strong>html</strong></mark><mark><strong>css</strong></mark><mark><strong>js</strong></mark>
					Langage back end : <mark><strong>php</strong></mark><mark><strong>sql</strong></mark><mark><strong>python</strong></mark>
					etc.
				</p>
			</div>

			<div>
				<h1>frameworks enseignés: </h1>
				<p>
					Framework css: <mark><strong>bootstrap</strong></mark>
					Framework js: <mark><strong>jquery</strong></mark> 
					Framework php: <mark><strong>laravel</strong></mark> 
					<br/>
				</p>
			</div>
			<div>
				<h1>CMS</h1>
				<p>
					CMS : <mark><strong>wordpress, joomla</strong></mark>
					etc.
				</p>
			</div>
		</div>
	</li>

	<li>
		<input type="radio" name="conteneur_app" id="tercero">
		<label for="tercero" class="label">
			programmation
		</label>
		<div class="contenu typeApp">
			<div class="first">
				<h1>algorithme</h1>
				<p>
					La base de la programmation n'est plus ni moins l'algorithme c'est pour quoi nous vous le proposons.
				</p>
			</div>

			<div>
				<h1>langages orientes objets</h1>
				<p>
					A la decouverte du monde objet une autre facon de coder qui simplifie grandement un probleme informatique donnée.
				</p>
			</div>
			<div>
				<h1>langages proceduraux</h1>
				<p>
					Ce procédé on ne peut que vous proposer des cours sur ca car c'est un preambule au objet : le codage classique
				</p>
			</div>
		</div>
	</li>


	<li>
		<input type="radio" name="conteneur_app" id="cuarto">
		<label for="cuarto" class="label">
			autres
		</label>
		<div class="contenu typeApp">
			<div class="first">
				<h1>analyse</h1>
				<p>
					Comme que cette phase precécé l'implementation, nous vous proposons une etude de la problematique jusqu'a la base de donnée
				</p>
			</div>

			<div>
				<h1>admin systeme et reseau</h1>
				<p>
					Nous proposons des cours de renforment en reseau informatique plus particulierement en administration systeme window et linux
				</p>
			</div>
			<div>
				<h1>divers</h1>
				<p>
					Et tant d'autres technologies divers liés aix tics.
				</p>
			</div>
		</div>
	</li>
</ul>






<?php  
include 'ENTETE_PIED/footer.php';
?>
	
</body>
</html>
