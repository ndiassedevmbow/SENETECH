<?php
$server = "localhost";
$log = "root";
$psw = "";
try{
  $conn = new PDO("mysql:host=$server; dbname=chat", $log, $psw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
  echo "Error ==> " . $e->getMessage();
}

        
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $reqEmail = $conn->prepare("SELECT * FROM abonnes WHERE email = ? ");
        $reqEmail->execute(array($email));
        $exitEmail = $reqEmail->rowCount();
            if ($exitEmail == 0) {
                $abonne = $conn->prepare("INSERT INTO abonnes(nom, email) VALUES(?, ?)");
                $abonne->execute(array($nom, $email));
                echo $nom. " Merci de vous etre abonnés";
                // header('Location: index.php');
            }else{
                echo $nom. " Vous vous etes deja abonnés";
            }    
        }else{
            echo $nom. " Votre email est invalide";
        }
}    
?>

