





<?php


session_start();
echo ($_POST['genre']);

               // $pseudoprofil = isset($_POST['pseudop']) ? $_POST['pseudop'] : NULL;
                //$pseudop=htmlspecialchars(addslashes($pseudoprofil));

                /*Affectation dans des variables du pseudo/mot de passe s'ils existent,
                affichage d'un message sinon*/
//if (isset($_POST['pseudop']) && isset($_POST['active']) && isset($_POST['desactive'])){
                if (isset($_POST['pseudop']) && isset($_POST['genre'])){
                 $id= htmlspecialchars(addslashes($_POST["pseudop"]));
                 $genree=htmlspecialchars(addslashes($_POST['genre']));
 // $desactivep=htmlspecialchars(addslashes($_POST["desactive"]));
                 echo($id);
                 echo($genree);

               }

//---------------------------------------insertions---------------------------------------------------------------

                //if(       (!empty($_POST["pseudop"])) && (!empty($_POST['active']) || !empty($_POST['desactive'])  )    )       
               
                                //echo html
                   // $peudop = htmlspecialchars(addslashes($_POST["pseudop"]));
                   // $mdp= htmlspecialchars(addslashes($_POST["mdp"]));

               
//connexion
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
               
               
/* 1) Requête 1) SQL incomplète de recherche du compte utilisateur à partir
des pseudo / mot de passe saisis 
*/
/*
//requete recuperation statu
SELECT CPT_PSEUDO, PRO_statu
FROM T_COMPTE_UTILISATEUR_CPT
JOIN T_PROFIL_UTILISATEUR_PRO USING(CPT_PSEUDO)
WHERE CPT_PSEUDO = 'lala' 
AND CPT_MOT_DE_PASSE = MD5('koko')
AND PRO_validite = 'A';

*/
if ($genree== 'A') {
  $sql="UPDATE T_PROFIL_UTILISATEUR_PRO
  set pro_validite = 'A'
  WHERE CPT_PSEUDO='".$id."';
  ";
  $resultat = $mysqli-> query($sql);
  header("Location:admin_accueil.php");
//echo($sql);

  if ($resultat==false) {
 // La requête a echoué
   echo "Error: Problème de requete \n";
   exit();
 }
 else{
  //$row = $resultat->fetch_assoc();
 }


//header("Location:admin_accueil.php");

}

//requete original
//$sql="SELECT cpt_pseudo,cpt_mot_de_passe FROM t_compte_utilisateur_cpt WHERE
//cpt_pseudo='" . $id . "' AND cpt_mot_de_passe=MD5('" . $motdepasse . "');";


/* 1bis) A NOTER : on préparera plutôt une requête SQL 1bis) complète avec une
jointure pour rechercher si un compte utilisateur valide (‘A’) existe dans la
table des données des profils et récupérer aussi son statut à partir des
pseudo / mot de passe saisis */
/* Exécution de la requête pour vérifier si le compte (=pseudo+mdp) existe !*/

else {
 /* A NOTER : si on a complété la requête 1) proposée, on peut aussi
 récupérer et tester la validité du profil, en faisant, par exemple :
 $ligne=$resultat->fetch_assoc();
 if($resultat->num_rows == 1 && $ligne["pfl_validite"]=='A'){...}
 */
 /* Dans le cas de la requête 1) non complétée ou 1bis), on teste si une
 ligne de résultat a été renvoyée, c'est à dire si le compte existe bien
 (1)) et est activé (1bis)) :
 */
 if($genree=='D') {
//Mise à jour des données de la session
//$_SESSION['login']=$id;
/* A prévoir et finaliser : récupérer puis vérifier
 le statut du profil dans la base MariaDB,
 puis affecter la valeur du statut à $_SESSION['statut']
 $_SESSION['statut']=...;
 */


 //echo ($_SESSION['statut']);

/* Redirection vers la page autorisée à cet utilisateur
ATTENTION !! Ne pas mettre d'appel d'echo() / de balise HTML
au-dessus de header() dans cette condition */




  //echo ($_SESSION['PRO_statu']);
$desactivation="
UPDATE T_PROFIL_UTILISATEUR_PRO
set pro_validite = 'D'
WHERE CPT_PSEUDO='".$id."';
";

if ($desactivation==false) {
 // La requête a echoué
 echo "Error: Problème d'accès à la base \n";
 exit();
}
$resultat2 = $mysqli-> query($desactivation);
header("Location:admin_accueil.php");
//echo ($desactivation);


//$row2 = $resultat->fetch_assoc();


}

//Fermeture de la communication avec la base MariaDB
}


//
















$mysqli->close();

?>





