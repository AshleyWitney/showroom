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
            <a href="#" class="navbar-brand scroll-top">Victory</a>
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
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="blog.php">Actualités</a></li>
                        <li><a href="selection.php">Nos Sélections</a></li>
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






    <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Page action</h2>
                    </div>
                </div>
            </div>
            <div class="row">




                <?php

                //$pseudoo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
                //$id=htmlspecialchars($pseudoo);
                

                


                echo($_SESSION['login']);
                $pseudoprofil = isset($_SESSION['login']) ? $_SESSION['login'] : NULL;
                $pseudop=htmlspecialchars(addslashes($pseudoprofil));

                $titree=isset($_POST['titre']) ? $_POST['titre']: NULL;
                $titrea=htmlspecialchars(addslashes($titree));

                $text = isset($_POST['texte']) ? $_POST['texte'] : NULL;
                $texte=htmlspecialchars(addslashes($text));

                $genree = isset($_POST['genre']) ? $_POST['genre'] : NULL;
                $genre=htmlspecialchars(addslashes($genree));

                







//---------------------------------------insertions---------------------------------------------------------------

                if(       (!empty($_POST["titre"])) and (!empty($_POST["texte"])) and (!empty($_POST["genre"]))             )
                {
                                //echo html
                    /*
                    $peudop = htmlspecialchars(addslashes($_POST["pseudop"]));
                    $mdp= htmlspecialchars(addslashes($_POST["mdp"]));
                    $mdp2 = htmlspecialchars(addslashes($_POST["mdp2"]));
                    $nom = htmlspecialchars(addslashes($_POST["nom"]));
                    $prenom = htmlspecialchars(addslashes($_POST["prenom"]));
*/


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
//Préparation de la requête à partir des chaînes saisies =>
//concaténation (avec le point) des différents éléments composant la
                           /*
                           //avec curdatte
//requête
                           $sql="INSERT INTO T_PROFIL_UTILISATEUR_PRO (CPT_PSEUDO, PRO_NOM , PRO_prenom , PRO_mail , PRO_DATE_CREATION , PRO_validite ,  PRO_statu ) 
                           VALUES ('" .$nom. "','" .$prenom. "','" .$mail. "','" ."'R','D',curdate(),'".$pseudop."');";
                           */
                           
                           //bonne requete profil





                           
                           $sql="INSERT INTO T_ACTUALITE_ACT (ACT_ID , CPT_PSEUDO,ACT_TITRE , ACT_Texte , ACT_DATE_PUBLICATION , ACT_ETAT ) 
                           VALUES (null,'" .$pseudop. "','" .$titrea. "','" .$texte. "',curdate() ,'" .$genre. "'  );";
                           
// Affichage de la requête constituée pour vérification
                           echo($sql);
//Exécution de la requête d'ajout d'un compte dans la table des comptes
                           $result3 = $mysqli->query($sql);
                           header("Location:admin_actualite.php");
                        if ($result3 == false) //Erreur lors de l’exécution de la requête
                        {
                            
                         // La requête a echoué
                            //echo($sql2);
                         echo "Error: La requête INSERTION actualité a échoué \n";
                         echo "Query: " . $sql . "\n";
                         echo "Errno: " . $mysqli->errno . "\n";
                         echo "Error: " . $mysqli->error . "\n";
                         
                         exit;
                     }
                        else //Requête réussie
                        {
                            echo "<br />";
                            echo "Actualité ajouté !" . "\n";
                        }


                        


                        







                    }
















                    else
                    {
                        echo("REMPLISSEZ les champs texte svp!");
                            //header("refresh:7;url=inscription.php")
                            //header("Location:inscription.php");
     // $delai = 1; 
   // $url = 'admin_actualite.php';
    //header("Refresh: $delai;url=$url");
                    }


                    $mysqli->close();

                    ?>


                </div>



            </div>
                <!--div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_02.jpg" alt="">
                        <div class="date">21 Oct 2017</div>
                        <div class="right-content">
                            <h4>Succulents Hashtag Folk</h4>
                            <span>Branding / Admin</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div-->
                <!--div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_03.jpg" alt="">
                        <div class="date">11 Oct 2017</div>
                        <div class="right-content">
                            <h4>Knaus Sriracha Pinterest</h4>
                            <span>Dessert / Chef</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div-->
                <!--div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_04.jpg" alt="">
                        <div class="date">03 Oct 2017</div>
                        <div class="right-content">
                            <h4>Crucifix Selvage Coat</h4>
                            <span>Plate / Chef</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>

                </div-->

            </div>
        </div>
    </section>



    


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!--p>Copyright &copy; 2017 Victory Template</p-->


                    <div>




                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>templatemo</em></p>
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