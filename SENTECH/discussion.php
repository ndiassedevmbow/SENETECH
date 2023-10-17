<?php  
$host = "localhost"; $user = "root"; $password = ""; $dbname = "chat";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

if (isset($_POST['send'])) {     
	$username = $_POST['username'];
    $content = $_POST['text']; 
    $time = date('Y-m-d H:i:s');

    $sql = "INSERT INTO discussion (username, content, time) VALUES ('$username', '$content', '$time')";

    if (mysqli_query($conn, $sql)) {
        header("Location: discussion.php"); 
        exit();
    } else {
        echo "Une erreur est survenue : " . mysqli_error($conn);
    }
}

?>







<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<meta charset="utf-8"/>
	<title>sentech-discussion</title>

	<!-- LIENS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		#formCom
		{
			background: white;
			outline: 2px dashed orange;
			outline-width: 3px;
			outline-offset: 5px;
			margin: 15px auto;
			width: 80%;
			border: 8px double black;
			border-radius: 15px;
		}
		#formCom h1
		{
			font-size: 50px;
			text-align: center;
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
		}
		

		#formCom .inputCom
		{
			width: 70%;
			margin: 5px auto;
		}
		#formCom .inputCom .nomDiv
		{
			margin-bottom: 25px;
		}
		#formCom .inputCom label
		{
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
			font-size: 35px;
		}
		#formCom .inputCom input
		{
			width: 753px;
			height: 35px;
		}
		#formCom .inputCom textarea
		{
			
		}

		#formCom .inputCom input, #formCom .inputCom textarea
		{
			border: 2px solid black;
			border-radius: 15px;
		}
		#formCom #btnCom
		{
			cursor: pointer;
			width: 25%;
			margin: 25px 0 25px 400px;
			border: 3px solid black;
			border-radius: 15px;
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
			font-size: 35px;
			background: orange;
			color: white;
		}


		#com
		{
			border: 8px double black;
			border-radius: 15px;
			margin: 35px auto;
			width: 90%;
			outline: 2px dashed orange;
			outline-width: 3px;
			outline-offset: 5px;
		}
		#com h1
		{
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
			font-size: 35px;
			text-align: center;
			font-size: 55px;
		}
		#com .users, #com .times
		{
			font-variant: small-caps;
		}
		#com .users
		{
			font-family: Bernard MT Condensed;
			font-variant: small-caps;
			font-size: 25px;
			text-transform: lowercase;
			letter-spacing: 2px;
		}
		#com .textUsers
		{
			font-family: Times New Roman sans-serif;
			margin-left: 25px;
			font-size: 20px;
		}
		#com .times
		{
			
		}


		@media screen and (max-width: 1150px)
		{
			#formCom
			{
				overflow: hidden;
			}
			#formCom .inputCom input
			{
				width: 300px;
				display: block;
				margin: 0 auto 0 0;
			}
			.inputCom textarea
			{
				margin: 0 auto 0 0;
				width: 300px;
			}
			#formCom #btnCom
			{
				width: 50%;
				/*margin: 10px 150px;*/
				margin: 15px 15px 15px 100px;
			}
		}
		@media screen and (max-width: 475px)
		{
			
			#formCom .inputCom input
			{
				width: 150px;
				display: block;
				margin: 0 auto 0 0;
			}
			.inputCom textarea
			{
				margin: 0 auto 0 0;
				width: 150px;
			}
	
		}
	</style>
</head>


<body>


<?php  
include 'ENTETE_PIED/header.php';
?>
<hr id="ligne">


<!-- FORMULAIRE -->
<form method="post" action="" id="formCom">
	
	<h1>
		poster un commentaire
	</h1>

	<div class="inputCom">
		
		<div class="nomDiv">
			<label for="nom">nom: </label> <br>
		 	<input type="text" id="nom" class="nom" name="username" placeholder="Nom d'utilisateur" required>
		</div>

		<div class="textDiv">
			<label for="text">message: </label> <br>
		    <textarea id="text" name="text" class="text" required rows="7" cols="105"></textarea>
		</div>

	</div>

	<button type="submit" name="send" id="btnCom">envoyer</button>

</form>


<div id="com">

	<h1>
		commentaires
	</h1>

	<div id="mes">
		
		<?php  
		
		$sql = "SELECT * FROM discussion ORDER BY id DESC";
		$result = mysqli_query($conn, $sql);	
		
		while ($row = mysqli_fetch_assoc($result)) {
		    
		    echo "<div>";
		    
		    echo "<span class='users'>" . $row['username'] . "</span>&nbsp&nbsp&nbsp;";
		    echo "<span class='times'>" . $row['time'] . "</span>";

		    echo "<p class='textUsers'>" . $row['content'] . "</p>";
		    
		    echo "</div>";
		}
		?>
	</div>

</div>

<?php  
include 'ENTETE_PIED/footer.php';
?>
	
</body>
</html>
