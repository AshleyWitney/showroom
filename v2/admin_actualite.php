<?php
/* Vérification ci-dessous à faire sur toutes les pages dont l'accès est
autorisé à un utilisateur connecté. */
session_start();
if(!isset($_SESSION['login']) && !isset($_SESSION['statut'])    )//A COMPLETER pour tester aussi le statut...
{

  header("Location:session.php");
  /*
  if ($_SESSION['statut']=='A') {
    header("Location:admin_accueil.php");
  }
 //Si la session n'est pas ouverte, redirection vers la page du formulaire
    elseif ($_SESSION['statut']=='R') {
      header("Location:index.php");
    }
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
  <h1>ESPACE ACTUALITES</h1>
  <!--Suite du contenu du fichier HTML-->
  <?php
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


 /* Code PHP permettant de d'afficher les actualites. */
 $profil = "
 SELECT * from T_ACTUALITE_ACT
 join T_PROFIL_UTILISATEUR_PRO USING(CPT_PSEUDO)

 ";
 $resultp = $mysqli->query($profil);
  //int $mysqli_result->num_rows;
 $row_cnt = $resultp->num_rows;

 printf("Nombre de lignes %d lignes.\n", $row_cnt);

 
 
//tableau de toutes les actualités


 $sql ="
 SELECT * from T_ACTUALITE_ACT
 join T_PROFIL_UTILISATEUR_PRO USING(CPT_PSEUDO);
 ";
 $result = $mysqli->query($sql);

                   // $req = "SELECT ele_id FROM t_mentionne_tj WHERE sel_id=" .$selec['sel_id']. "AND ele_id > 0 LIMIT 1;";

 if ($result->num_rows > 0) { 

  ?>
  <table class="table table-striped">
    <tr align="center" style="background-color: #eaf0ff">
      <th>ACT_ID</th>
      <th>Titre</th>
      <th>Texte</th>
      <th>Date de publication</th>
      <th>Etat</th>
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      
      
    </tr>
    <tbody>
     <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row['ACT_ID'];  ?></td>
        <td><?php echo $row['ACT_TITRE'];  ?></td>
        <td><?php echo $row['ACT_Texte'];  ?></td>
        <td><?php echo $row['ACT_DATE_PUBLICATION'];  ?></td>
        <td><?php echo $row['ACT_ETAT'];  ?></td>
        <td><?php echo $row['CPT_PSEUDO'];  ?></td>
        <td><?php echo $row['PRO_NOM'];  ?></td>
        <td><?php echo $row['PRO_prenom'];  ?></td>
        
        
      </tr>
      <?php

    }
  }

  ?>

</tbody>
</table>










<!--ajouter une actualité-->





<center>  

  <form action="admin_actualite_action.php" method="post">
    <fieldset>
      <legend>Ajouter une actualité :</legend>

      
      <?php 
//Rappelle de l'utilisateur connecté
      echo "Que voulez vous ajouter :";
      echo($_SESSION['login'])
      ?>

      <p>Titre : 
        <input type="text" name="titre" placeholder="Titre"
        maxlength="200" required="required"/>
      </p>
      <p>Texte descriptif : 
        <input type="text " required
        minlength="4" maxlength="200" size="200" name="texte" placeholder="texte"
        maxlength="20" required="required"/>
      </p>
      <p>Afficher: 
        <input type="radio" name="genre" value="A" maxlength="20" required="required"/>
      </p>
      <p>Cacher: 
        <input type="radio" name="genre" value="C" maxlength="20" required="required"/>
      </p>
      
      

    </fieldset>

                        <!--p>Mdp : <input type="password" name="mdp" /></p>
                          <p>Mdp : <input type="password" name="mdp2" placeholder="Merci de répeter votre mot de passe" /></p-->
                            <p><input type="submit" value="Valider"></p>
                          </form>


                        </center>




























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