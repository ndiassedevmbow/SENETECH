<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
  <meta charset="utf-8"/>
  <title>sentech-a-propos</title>

  <!-- LIENS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="text/css">
      
    body{
      background: #F4F4F4;
    }

    #container_apro{
      width: 70%;
      background: #fff;
      padding: 40px 0;
      margin-left: auto;
      margin-right:auto;
      box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
      border-radius: 30px;
      border-left: 50px solid orange;
      border-right: 50px solid orange;
      padding: 20px;
    }
    #container_apro h1{
      text-align: center;
      font-family: Bernard MT Condensed;
      font-variant: small-caps;
      color: #7E7C7A;
      font-size: 45px;
      letter-spacing: 7px;
    }


    #container_apro .border{
      width: 100px;
      height: 3px;
      background: orange;
      margin: 40px auto;
    }
    #container_apro .container_apro-row{
      display: flex;
      flex-wrap: wrap;
    }
    #container_apro .container_apro-row .container_apro-col{
      flex: 50%;
    }


    #container_apro .container_apro-row .container_apro-col .about{
      padding-right: 30px;
    }
    #container_apro .container_apro-row .container_apro-col .about p{
      text-align: justify;
      margin-bottom: 20px;
      color: #7E7C7A;
      font-size: 20px;
      font-family: cursive;
    }
    #container_apro .container_apro-row .container_apro-col .about a{
      display: inline-block;
      color: #7E7C7A;
      text-decoration: none;
      border: 2px solid orange;
      border-radius: 24px;
      padding: 4px 30px;
      transition: 0.4s linear;
      font-family: Bernard MT Condensed;
      font-size: xx-large;
      font-variant: small-caps;
    }
    #container_apro .container_apro-row .container_apro-col .about a:hover{
      color: #fff;
      background: orange;
    }


    #container_apro .skills{
      padding-left: 30px;
    }
    #container_apro .skill{
      margin-bottom: 10px;
    }
    #container_apro .title{
      color: #7E7C7A;
      font-size: 20px;
      font-family: Bernard MT Condensed;
      font-variant: small-caps;
    }
    #container_apro .progress{
      width: 100%;
      height: 12px;
      background: #ddd;
      border-radius: 12px;
    }
    #container_apro .progress-bar{
      height: 12px;
      background: orange;
      border-radius: 12px;
    }
    #container_apro .p1{
      width: 70%;
    }
    #container_apro .p2{
      width: 60%;
    }
    #container_apro .p3{
      width: 50%;
    }
    #container_apro .p4{
      width: 40%;
    }
    #container_apro .progress-bar span{
      float: right;
      margin-right: 6px;
      line-height: 13px;
      color: #fff;
      font-size: 12px;
    }
 @media screen and (max-width:700px) {
  .container_apro-col{
    flex: 100%;
    margin: 10px 0;
  }
  .about,.skills{
    padding: 0;
  }
  .about{
    text-align: center;
  }
} 
@media screen and (max-width:475px) {
#container_apro h1{
     
      font-size: 25px;
      letter-spacing: 3px;
    }
    #container_apro
    {
     
      border-left: 30px solid orange;
      border-right: 30px solid orange;
    
    }
}
    </style>
 
  </head>


<body>


<?php  
include 'ENTETE_PIED/header.php';
?>

<hr id="ligne">

  <div id="container_apro">

      <h1>
        a-propos
      </h1>
      
      <div class="border"></div>
        
      <div class="container_apro-row">

        <div class="container_apro-col">
          <div class="about">
            <p>
              SENETECH est une entreprise transparente. Nos services que nous proposons sont decrites ci-contre avec un pourcentage affilié à chaque domaine.
              En cas de sollicitation nous nous montrons coherent et rigoureur respectivement pour le prix de nos services et la qualite du travail.
              Tout cela avec un suivu sans faille.
            </p>
            <a href="creation_application.php">voir plus</a>
          </div>
        </div>



        <div class="container_apro-col">
            
            <div class="skills">

              <div class="skill">
                  <div class="title">creation application</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>70%</span></div>
                  </div>
              </div>
 
              <div class="skill">
                <div class="title">cours inforamtique</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>60%</span></div>
                  </div>
              </div>
 
              <div class="skill">
                <div class="title">design</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>50%</span></div>
                  </div>
              </div>

              <div class="skill">
                <div class="title">administration systeme</div>
                  <div class="progress">
                    <div class="progress-bar p4"><span>40%</span></div>
                  </div>
              </div>

            </div>

        </div>


      </div>


    </div>


<?php  
include 'ENTETE_PIED/footer.php';
?>
  </body>
</html>