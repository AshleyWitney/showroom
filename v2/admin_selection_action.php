





<?php


session_start();

echo ($_POST['ele']);
echo($_POST['sel']);

               // $pseudoprofil = isset($_POST['pseudop']) ? $_POST['pseudop'] : NULL;
                //$pseudop=htmlspecialchars(addslashes($pseudoprofil));

                /*Affectation dans des variables du pseudo/mot de passe s'ils existent,
                affichage d'un message sinon*/
//if (isset($_POST['pseudop']) && isset($_POST['active']) && isset($_POST['desactive'])){
                if (isset( $_POST['ele']) && isset($_POST['sel'])){
                 $selec= htmlspecialchars(addslashes($_POST['sel']));
                 $elem=htmlspecialchars(addslashes( $_POST['ele']));
 // $desactivep=htmlspecialchars(addslashes($_POST["desactive"]));


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
if ($selec == true and $elem == true) {
 

  $verif ="
  SELECT  ele_id
  FROM TA_SELECTION_SEL 
  WHERE sel_id='".$selec ."'
  and ELE_ID='".$elem ."';
  ";
  $resverif = $mysqli-> query($verif);
  $row = $resverif->fetch_assoc();
  if ($resverif==false) {
 // La requête a echoué
   echo "Error: Problème de requete \n";
   exit();
 }
 if ($resverif->num_rows ==1) {
  $sql="
  DELETE from TA_SELECTION_SEL
  WHERE ELE_ID = '".$elem ."'
  and SEL_ID= '".$selec ."';
  ";
  $resultat = $mysqli-> query($sql);
  header("Location:admin_selection.php");
  echo($sql);



//header("Location:admin_accueil.php");
  if ($resultat==false) {
 // La requête a echoué
   echo "Error: Problème de requete \n";
   exit();
 }
 
}
elseif ($resverif->num_rows ==0) {
  echo "L'élément ne fait pas parti de la sélection!";
}

}




/*
//requete recuperant lles donnees d'une selection
SELECT  ele_id
FROM t_selection_sel 
LEFT JOIN TA_SELECTION_SEL USING (sel_id)
LEFT JOIN T_ELEMENT_ELE USING (ele_id)
LEFT JOIN T_LIEN USING (ele_id)
WHERE sel_id=3;
*/









//header("Location:admin_accueil.php");











$mysqli->close();

?>





