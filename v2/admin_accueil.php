<?php
/* Vérification ci-dessous à faire sur toutes les pages dont l'accès est
autorisé à un utilisateur connecté. */
session_start();
if(!isset($_SESSION['login']) && !isset($_SESSION['statut'])    )//A COMPLETER pour tester aussi le statut...
{

  header("Location:session.php");
  exit();
  /*
  if ($_SESSION['statut']=='A') {
    header("Location:admin_accueil.php");
  }
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
    elseif ($_SESSION['statut']=='R') {
      header("Location:index.php");
    }
    //sessiondestroy()
    //session unset
    //header vers index<
*/
  }

//exit();
  ?>
  <html>
  <head>
    <!--entête du fichier HTML-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BOOTAMA</title>
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
<title>Victory CSS Web Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/fontAwesome.css">
<link rel="stylesheet" href="css/hero-slider.css">
<link rel="stylesheet" href="css/owl-carousel.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body>

  <div class="header">
    <div class="container">
      <a href="#" class="navbar-brand scroll-top">BOOTAMA</a>
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="admin_accueil.php">Accueil
            & profil(s)</a></li>
            <li><a href="admin_actualite.php">Gestion des
            actualités</a></li>
            <li><a href="admin_selection.php">Gestion des sélections</a></li>
            <li><a href="admin_element.php">Gestion des éléments</a></li>
            <li><a href="admin_lien.php">Gestion des liens</a></li>
            <li><a href="deco.php">Déconnexion</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse-->
      </nav>
      <!--/.navbar-->
    </div>
    <!--/.container-->
  </div>
  <!--contenu du fichier HTML-->

  <!--Suite du contenu du fichier HTML-->

  <?php
//CONNEXION A LA BASE DE DONNEES
  $mysqli = new mysqli('localhost','zkonateas','xgsvsn4u','zfl2-zkonateas');
  if ($mysqli->connect_errno)
  {
 // Affichage d'un message d'erreur
   echo "Error: Problème de connexion à la BDD \n";
   echo "Errno: " . $mysqli->connect_errno . "\n";

   echo "Error: " . $mysqli->connect_error . "\n";
 // Arrêt du chargement de la page
   exit();
 }
 echo ("Connexion BDD réussie !");
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
 if (!$mysqli->set_charset("utf8")) {
   printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
   exit();
 }
                           //ESPACE ADMINISTRATEUR
 if ($_SESSION['statut'] == 'A') {
  echo("<h1>ESPACE ADMINISTRATION</h1>");
  
  
/* Code PHP permettant de souhaiter la bienvenue à l’utilisateur connecté et
d’afficher le détail de son profil ainsi que le nombre de profil */
$profil = "SELECT *
FROM T_PROFIL_UTILISATEUR_PRO
WHERE CPT_PSEUDO = '".$_SESSION['login']."';
";
$resultp = $mysqli->query($profil);
  //int $mysqli_result->num_rows;
$row_cnt = $resultp->num_rows;
echo ("<br> ");
printf("Nombre de lignes %d lignes.\n", $row_cnt);
echo ("<br> ");
echo ("Bienvenue ");
echo ($_SESSION['login']);
echo (" ! ");
echo ("<br> ");
echo ("<h2>Vos informations personelles : </h2>");


   // echo ($resultp);
    //TABLEAU DES INFORMATION DE L'ADMINISTRATEUR CONNECTE
if($resultp ->num_rows >0 ){
  ?>
  <table class="table table-bordered">
    <tr align="center" style="background-color:   #FFD700">
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Date de creation</th>
      <th>validite</th>
      <th>Statu</th>
      
    </tr>
    <tbody>
     <?php while($row1 = $resultp->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row1['CPT_PSEUDO'];  ?></td>
        <td><?php echo $row1['PRO_NOM'];  ?></td>
        <td><?php echo $row1['PRO_prenom'];  ?></td>
        <td><?php echo $row1['PRO_mail'];  ?></td>
        <td><?php echo $row1['PRO_DATE_CREATION'];  ?></td>
        <td><?php echo $row1['PRO_validite'];  ?></td>
        <td><?php echo $row1['PRO_statu'];  ?></td>
        
      </tr>
      <?php
    }
  }

  ?>

</tbody>
</table>
<?php


//tableau de tout les profils

echo ("<h2>Tableau des autres utilisateurs : </h2>");
$sql ="SELECT *
FROM T_PROFIL_UTILISATEUR_PRO";
$result = $mysqli->query($sql);

                   // $req = "SELECT ele_id FROM t_mentionne_tj WHERE sel_id=" .$selec['sel_id']. "AND ele_id > 0 LIMIT 1;";

if ($result->num_rows > 0) { 

  ?>
  <table class="table table-striped">
    <tr align="center"  style="background-color:    #FFD700" >
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Date de creation</th>
      <th>validite</th>
      <th>Statu</th>
      
    </tr>
    <tbody>
     <?php while($row = $result->fetch_assoc()) { ?>
      <tr >
        <td><?php echo $row['CPT_PSEUDO'];  ?></td>
        <td><?php echo $row['PRO_NOM'];  ?></td>
        <td><?php echo $row['PRO_prenom'];  ?></td>
        <td><?php echo $row['PRO_mail'];  ?></td>
        <td><?php echo $row['PRO_DATE_CREATION'];  ?></td>
        <td><?php echo $row['PRO_validite'];  ?></td>
        <td><?php echo $row['PRO_statu'];  ?></td>
        
      </tr>
      <?php

    }
  }

  ?>

</tbody>
</table>


<center>

  <!--Formulaire recuperation du speudo pour activer ou desactiver le profil-->
  <form action="compte_action.php" method="post">
    <fieldset>
      <legend>Activer/Désactiver un profil :</legend>

      <p>Le pseudo : 
        <input type="text" name="pseudop" placeholder="pseudo"
        maxlength="20" required="required"/>
      </p>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <div class="input-group-text">
           <input type="radio" name="genre" value="A"> Activer<br>
           <input type="radio" name="genre" value="D"> Désactiver<br>
         </div>

       </div>

     </fieldset>

                        <!--p>Mdp : <input type="password" name="mdp" /></p>
                          <p>Mdp : <input type="password" name="mdp2" placeholder="Merci de répeter votre mot de passe" /></p-->
                            <p><input type="submit" value="Valider"></p>
                          </form>

                        </center>

                        <?php 

                        
                      }
//REsponssable
                      
                      elseif ($_SESSION['statut'] == 'R') {
                       echo ($_SESSION['statut']);
                       echo("<h1>ESPACE RESPONSABLE</h1>");

  //nombre de ^profil
/* Code PHP permettant de souhaiter la bienvenue à l’utilisateur connecté et
d’afficher le détail de son profil. */
$profil = "SELECT *
FROM T_PROFIL_UTILISATEUR_PRO
WHERE CPT_PSEUDO = '".$_SESSION['login']."';
";
$resultp = $mysqli->query($profil);
  //int $mysqli_result->num_rows;
$row_cnt = $resultp->num_rows;
echo ("<br> ");
printf("Nombre de lignes %d lignes.\n", $row_cnt);
echo ("<br> ");
echo ("Bienvenue ");
echo ($_SESSION['login']);
echo (" ! ");
echo ("<br> ");
echo ("<h2>Vos informations personelles : </h2>");

  //TABLEAU DES INFORMATIONS DU RESPONSSABLE
   // echo ($resultp);
if($resultp ->num_rows >0 ){
  ?>
  <table class="table table-bordered">
    <tr align="center" style="background-color:   #FFD700">
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Date de creation</th>
      <th>validite</th>
      <th>Statu</th>
      
    </tr>
    <tbody>
     <?php while($row1 = $resultp->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row1['CPT_PSEUDO'];  ?></td>
        <td><?php echo $row1['PRO_NOM'];  ?></td>
        <td><?php echo $row1['PRO_prenom'];  ?></td>
        <td><?php echo $row1['PRO_mail'];  ?></td>
        <td><?php echo $row1['PRO_DATE_CREATION'];  ?></td>
        <td><?php echo $row1['PRO_validite'];  ?></td>
        <td><?php echo $row1['PRO_statu'];  ?></td>
        
      </tr>
    </tbody>
  </table>
  <?php
}
}




}
?>










<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
          event.preventDefault();
          var sectionID = $(this).attr("data-id");
          scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
          event.preventDefault();
          $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
          event.preventDefault();
          $('#main-nav').toggleClass("open");
        });
      });
    // scroll function
    function scrollToID(id, speed){
      var offSet = 0;
      var targetOffset = $(id).offset().top - offSet;
      var mainNav = $('#main-nav');
      $('html,body').animate({scrollTop:targetOffset}, speed);
      if (mainNav.hasClass("open")) {
        mainNav.css("height", "1px").removeClass("in").addClass("collapse");
        mainNav.removeClass("open");
      }
    }
    if (typeof console === "undefined") {
      console = {
        log: function() { }
      };
    }
  </script>
</body>
</html>
