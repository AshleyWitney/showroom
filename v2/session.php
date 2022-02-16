<!DOCTYPE html>
<html>
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
// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
if (!$mysqli->set_charset("utf8")) {
   printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
   exit();
}
echo ("Connexion BDD réussie !");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
<title>Victory - Contact page</title>
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
                       <li><a href="index.php">Acceuil</a></li>
                        <li><a href="session.php">Connexion</a></li>
                         <li><a href="sel.php">Nos Sélections</a></li>
                        <li><a href="inscription.php">inscription</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->





    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                     
                    </div>


<div class="blog-post">



                    <div>

<!--div id="contenu">
<form action="action.php" method="post">
 <p>Votre pseudo : <input type="text" name="pseudo" /></p>
 <p>Votre mot de passe : <input type="text" name="mdp" /></p>
 <p><input type="submit" value="Valider"></p>
</form>
</div-->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>CONNEXION</h2>
                    </div>

                           



                    <form action="session_action.php" method="post">
                        <fieldset>
                            <legend>Données personnelles :</legend>

                            <p>Votre pseudo : 
                                <input type="text" name="pseudop" placeholder="pseudo"
                                maxlength="20" required="required"/>
                            </p>
                             <p>Mdp : <input type="password" name="mdp" /></p>
                       

                        </fieldset>

                        <!--p>Mdp : <input type="password" name="mdp" /></p>
                        <p>Mdp : <input type="password" name="mdp2" placeholder="Merci de répeter votre mot de passe" /></p-->
                        <p><input type="submit" value="Valider"></p>
                    </form>



























                </div>
            </div>
            
        </div>
     
    </div>
</div>
</section>

                





                </div>
            </div>
            
        </div>
      
    </div>
</div>
</section>






<footer>
         <div class="container">
            <div class="row">

                <?php               
            //version avec formulaire profile page6 du document 2

                        $requet="SELECT * FROM T_PRESENTATION_PRES";
            //Affichage de la requête préparée
                        $result = $mysqli->query($requet);
                        $row = $result->fetch_assoc()
                        ?>

                <div class="col-md-8">
                    <h1 style="color: green"><?php echo $row['PRES_NOM_STRUCTURE'];  ?></h1>
                   
                    <p><?php echo $row['CPT_PSEUDO'];  ?></p>
                    <p><?php echo $row['PRES_TEXTE_BIENVENUE'];  ?></p>
                    <p><?php echo $row['PRES_HORAIRE'];  ?></p>
                </div>
                <!--div class="col-md-2">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div-->
                <div class="col-md-4">
                     <h1 style="color: white">Informations</h1>
                     <ul>
                        <li><span style="color: yellow" class="icon fa fa-map"></span><span style="color: red" class="text"><?php echo $row['PRES_ADESSE'];  ?></span></li>
                        <li><a><span class="icon fa fa-phone"></span><span class="text"><?php echo $row['PRES_telephone'];  ?></span></a></li>
                        <li><a><span class="icon fa fa-paper-plane"></span><span class="text"><?php echo $row['PRES_mail'];  ?></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>


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