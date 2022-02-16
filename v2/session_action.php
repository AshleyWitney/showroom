


                <?php


session_start();


               // $pseudoprofil = isset($_POST['pseudop']) ? $_POST['pseudop'] : NULL;
                //$pseudop=htmlspecialchars(addslashes($pseudoprofil));

                /*Affectation dans des variables du pseudo/mot de passe s'ils existent,
affichage d'un message sinon*/
if (isset($_POST['pseudop']) && isset($_POST['mdp'])){
 $id= htmlspecialchars(addslashes($_POST["pseudop"]));
 $motdepasse=htmlspecialchars(addslashes($_POST["mdp"]));

}

//---------------------------------------insertions---------------------------------------------------------------

                if(       (!empty($_POST["pseudop"])) and (!empty($_POST["mdp"])) )           
                {
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
$sql="SELECT  PRO_statu
FROM T_COMPTE_UTILISATEUR_CPT
JOIN T_PROFIL_UTILISATEUR_PRO USING(CPT_PSEUDO)
WHERE CPT_PSEUDO = '" . $id . "'  
AND CPT_MOT_DE_PASSE = MD5('" . $motdepasse . "')
AND PRO_validite = 'A';";
//echo($sql);
//requete original
//$sql="SELECT cpt_pseudo,cpt_mot_de_passe FROM t_compte_utilisateur_cpt WHERE
//cpt_pseudo='" . $id . "' AND cpt_mot_de_passe=MD5('" . $motdepasse . "');";


/* 1bis) A NOTER : on préparera plutôt une requête SQL 1bis) complète avec une
jointure pour rechercher si un compte utilisateur valide (‘A’) existe dans la
table des données des profils et récupérer aussi son statut à partir des
pseudo / mot de passe saisis */
/* Exécution de la requête pour vérifier si le compte (=pseudo+mdp) existe !*/
$resultat = $mysqli->query($sql);
$row = $resultat->fetch_assoc();

if ($resultat==false) {
 // La requête a echoué
 echo "Error: Problème d'accès à la base \n";
 exit();
 }
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
 if($resultat->num_rows == 1) {
//Mise à jour des données de la session
$_SESSION['login']=$id;
/* A prévoir et finaliser : récupérer puis vérifier
 le statut du profil dans la base MariaDB,
 puis affecter la valeur du statut à $_SESSION['statut']
 $_SESSION['statut']=...;
 */

 $_SESSION['statut']= $row['PRO_statu'];
 echo ($_SESSION['statut']);

/* Redirection vers la page autorisée à cet utilisateur
ATTENTION !! Ne pas mettre d'appel d'echo() / de balise HTML
 au-dessus de header() dans cette condition */


 if ($_SESSION['statut'] == 'A') {

    header("Location:admin_accueil.php");
 }
 elseif ($_SESSION['statut'] == 'R'){
  header("Location:admin_accueil.php");
 }
 

  //echo ($_SESSION['PRO_statu']);
}
else{
 // aucune ligne retournée
 // => le compte n'existe pas ou n'est pas valide
echo "pseudo/mot de passe incorrect(s) ou profil inconnu !";
echo "<br /><a href=\"./session.php\">Cliquez ici pour réafficher
 le formulaire</a>";
}
//Fermeture de la communication avec la base MariaDB
}

$mysqli->close();

?>


