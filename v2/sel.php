<!DOCTYPE html>
<html>
<?php
            //version avec formulaire profile page6 du document 2
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


  


<h1>Découvrez nos sélections!</h1>
<?php 
//echo ("<img width='100' src='./images/".$T_ELEMENT_ELE['ELE_IMAGE']. "' > ");
 ?>




<?php

                    $sql = "SELECT * FROM t_selection_sel";
                    $result = $mysqli->query($sql);

                   // $req = "SELECT ele_id FROM t_mentionne_tj WHERE sel_id=" .$selec['sel_id']. "AND ele_id > 0 LIMIT 1;";

                    if ($result->num_rows > 0) { 

                      ?>
                      <table class="table table-striped">
                        <tr align="center" style="background-color: #eaf0ff">
                          <th>Intitulé</th>
                          <th>Texte</th>
                          <th>Pseudo</th>
                          <th>Date de mise en ligne</th>
                          <th>Liens</th>
                          
                        </tr>
                        <tbody>
                         <?php while($row = $result->fetch_assoc()) { ?>
                          <tr>
                            <td><?php echo $row['SEL_INTITULE'];  ?></td>
                            <td><?php echo $row['SEL_TEXTE_INTRODUCTIF'];  ?></td>
                            <td><?php echo $row['CPT_PSEUDO'];  ?></td>
                            <td><?php echo $row['SEL_DATE_AJOUT'];  ?></td>
                            <?php $req="SELECT ELE_ID FROM TA_SELECTION_SEL where SEL_ID=" .$row['SEL_ID']. " AND ELE_ID >0 LIMIT 1;"; 
                            $result1 = $mysqli->query($req);
                            $row1 = $result1->fetch_assoc();
                            ?>
                            <td><a style="font-family: AngsanaUPC;" href="affichagesel.php?SEL_ID=<?php echo $row['SEL_ID'] ?> &ELE_ID=<?php echo $row1['ELE_ID'] ?>">Voir</a></td>
                            <?php 
                            //$sele = $row['SEL_ID'];
                            

                             ?>
                          </tr>
                          <?php

                        }
                      }

                      ?>
                    </tbody>
                  </table>
                  
                  

<?php                    
                         
/*
                         $requete="SELECT ele_id FROM TA_SELECTION_SEL WHERE SEL_ID =3 ;";
                                //Affichage de la requête préparée
                                echo ($requete);
                                $result1 = $mysqli->query("SELECT ele_id FROM TA_SELECTION_SEL WHERE SEL_ID =3 ORDER BY ele_id ASC LIMIT 1;");
                                if ($result1 == false) //Erreur lors de l’exécution de la requête
                                { // La requête a echoué
                                 echo "Error: La requête a echoué \n";
                                 echo "Errno: " . $mysqli->errno . "\n";
                                 echo "Error: " . $mysqli->error . "\n";
                                 exit();
                                }
                                else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
                                {
                                echo "<br />";
                                echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
                                echo "<br />";
                              
                                }
                                //Ferme la connexion avec la base MariaDB
                                $mysqli->close();
                     

*/












?>





<div>
       <?php
       /*
                       //version avec formulaire profile page6 du document 2

                        $requet="SELECT *FROM t_selection_sel";
            //Affichage de la requête préparée
                        $result = $mysqli->query($requet);
                        $row = $result->fetch_assoc();
                        echo("<table>");

                       //$sql2=" SELECT ele_id FROM TA_SELECTION_SEL WHERE SEL_ID =3 ORDER BY ele_id ASC LIMIT 1;"
                       //$result = $mysqli->query($sql2);
                       // $row = $result->fetch_assoc();
                        //echo("<table>");
$sel = 3;
$ele = 4;

     while ($personne = $result->fetch_assoc())
                                {
                    echo ("<tr>");
                    echo("<td>"); echo ($personne['SEL_INTITULE']); echo("</td>"); 
                    echo("<td>");  echo ($personne['SEL_TEXTE_INTRODUCTIF']); echo("</td>"); 
                    echo("<td>");  echo ($personne['CPT_PSEUDO']); echo("</td>"); 
                    echo("<td>");  echo ($personne['SEL_DATE_AJOUT']); echo("</td>");
                     echo("<td>"); echo "<a href='./affichagesel.php?num=". $sel. $ele ."'>Voir</a>"; echo("</td>");
                     $req="SELECT ELE_ID FROM TA_SELECTION_SEL where SEL_ID=" . $sql. " AND ELE_ID >0 LIMIT1;";
                    echo ("</tr>");
                    echo("</table>");

                                }
                    //echo("<td>");  echo "<a style="font-family: AngsanaUPC;" href="affichagesel.php?SEL_ID=3&ELE_ID=4">Voir</a>" echo("</td>");
                   */
                   
                    
                                
                                ?>
</div>


        <div class="row">
    <ul class="page-number">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">&gt;&gt;</a></li>
    </ul>
</div>
    </section>
 </center>








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