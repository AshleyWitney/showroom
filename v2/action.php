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
                

                $mdpp = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;
                $mdp=htmlspecialchars($mdpp);

                $mdpp2 = isset($_POST['mdp2']) ? $_POST['mdp2'] : NULL;
                $mdp2=htmlspecialchars(addslashes($mdpp2));


                $pseudoprofil = isset($_POST['pseudop']) ? $_POST['pseudop'] : NULL;
                $pseudop=htmlspecialchars(addslashes($pseudoprofil));

                $nomp = isset($_POST['nom']) ? $_POST['nom'] : NULL;
                $nom=htmlspecialchars(addslashes($nomp));

                $prenomprofil = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
                $prenom=htmlspecialchars(addslashes($prenomprofil));

                $mailprofil = isset($_POST['mail']) ? $_POST['mail'] : NULL;
                $mail=htmlspecialchars(addslashes($mailprofil));

                $validiteprofil = isset($_POST['validite']) ? $_POST['validite'] : NULL;
                $validite=htmlspecialchars(addslashes($validiteprofil));

                $statutprofil = isset($_POST['statut']) ? $_POST['statut'] : NULL;
                $statut=htmlspecialchars(addslashes($statutprofil));

                $datecreationprofil = isset($_POST['datecreation']) ? $_POST['datecreation'] : NULL;
                $datecreation=htmlspecialchars(addslashes($datecreationprofil));







//---------------------------------------insertions---------------------------------------------------------------

                if(       (!empty($_POST["pseudop"])) and (!empty($_POST["mdp"])) and (!empty($_POST["mdp2"])) and (!empty($_POST["nom"])) and !empty($_POST["prenom"])            )
                {
                                //echo html
                    $peudop = htmlspecialchars(addslashes($_POST["pseudop"]));
                    $mdp= htmlspecialchars(addslashes($_POST["mdp"]));
                    $mdp2 = htmlspecialchars(addslashes($_POST["mdp2"]));
                    $nom = htmlspecialchars(addslashes($_POST["nom"]));
                    $prenom = htmlspecialchars(addslashes($_POST["prenom"]));


                    if(strcmp($mdp, $mdp2) == 0){

                        $sql="INSERT INTO T_COMPTE_UTILISATEUR_CPT VALUES('" .$pseudop. "','" .MD5($mdp). "');";
                        $result = $mysqli->query($sql);

                        if($result != false ){

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
                                         $sql="INSERT INTO T_PROFIL_UTILISATEUR_PRO (CPT_PSEUDO, PRO_NOM , PRO_prenom , PRO_mail , PRO_DATE_CREATION , PRO_validite ,  PRO_statu ) 
                           VALUES ('" .$pseudop. "','" .$nom. "','" .$prenom. "','" .$mail. "', curdate(),'D','R' );";
                           
// Affichage de la requête constituée pour vérification
                           echo($sql);
//Exécution de la requête d'ajout d'un compte dans la table des comptes
                           $result3 = $mysqli->query($sql);
                        if ($result3 == false) //Erreur lors de l’exécution de la requête
                        {
                            $sql2="DELETE FROM T_COMPTE_UTILISATEUR_CPT WHERE CPT_PSEUDO='".$pseudop ."'";
                            $result8 = $mysqli->query($sql2);
                         // La requête a echoué
                            echo($sql2);
                           echo "Error: La requête INSERTION PROFIL a échoué \n";
                           echo "Query: " . $sql . "\n";
                           echo "Errno: " . $mysqli->errno . "\n";
                           echo "Error: " . $mysqli->error . "\n";
                           
                           exit;
                       }
                        else //Requête réussie
                        {
                            echo "<br />";
                            echo "Inscription réussie !" . "\n";

                        }


                    }


                }
                else
                {
                    //MOT DE PASSEEEEEEEEEEEE INCORRECTE
                    echo("MOT DE PASSE NON IDENTIQUE!");
                    $delai = 1; 
    $url = 'inscription.php';
    header("Refresh: $delai;url=$url");
                    

                    //header("Location:inscription.php");
                    //echo("MOT DE PASSE NON IDENTIQUE!");

                }
            }
            else
            {
                echo("REMPLISSEZ TOUT LE FORMULAIRE SVP!");
                            //header("refresh:7;url=inscription.php")
                            //header("Location:inscription.php");
      $delai = 1; 
    $url = 'inscription.php';
    header("Refresh: $delai;url=$url");
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