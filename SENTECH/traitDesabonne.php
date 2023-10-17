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

        
    $nom = $_POST['nom'];
    $email = $_POST['email'];
        
        $req = $conn->query("SELECT * FROM abonnes");
        
        $id = 0;
        $ok = 0;
        while ($row = $req->fetch()) {
            if($row['nom'] === $nom && $row['email'] === $email)
            {
                $id = $row['id'];
                $ok = 1;
            }
        }

        if($ok == 1)
        {
            $ban = $conn->prepare('DELETE FROM abonnes where id = ?');
            $ban->execute(array($id));
            echo " votre desabonnement est validé";
        }
        else
        {
            echo "Vous vous n'etes pas abonne au prealable";
        }
    
?>