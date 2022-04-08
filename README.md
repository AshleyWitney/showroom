# READ ME
## AUTEURS :

AMRI Ibrahim

LERHRIBI Douha

ELAATFI Mohamed

KADRI Youssef

KONATE ASHLEY WITNEY

- la liste de ce qui a été rendu avec une petite description succincte;
- des éléments techniques pour la comprehension de vos solutions et qu'il est difficile de trouver par la seule lecture des commentaires;
- un bilan critique sur vos choix de conception, de programmation et les solutions que maintenant vous auriez choisies.

- ajoutez ce que vous n'avez pas pu faire



# DESCRIPTION DU PROJET
Le Projet de synthèse L3 IFA/CDA  est constituée de deux parties, la première partie consite à développer un prototype de moniteur pour un système de commande pour des éléménts graphiques. Dans la version minimal, il sagit d'une forme géométrique basique(rectangle,ligne,ellipse etc). Le moniteur permettra donc de les installer dans un conteneur et de les animers.
La seconde partie est constituée d'un principe client-serveur socket.
Le client ROBI saisit un programme ROBI et l'envoi vers un serveur ROBI. Nous avons utilisé JAVA FX


## PROJET ROBI 
### Exercice 1 : Prise en main de la couche graphique
Cet exercice consiste à mener le robi à faire les mouvements suivants :
• Déplacement de robi jusqu’au bord droit
• Déplacement jusqu’au bord bas
• Déplacement jusqu’au bord gauche
• Déplacement jusqu’au bord haut
• Et à changer la couleur du robi avec une couleur aléatoire

### Exercice 2 : Première version d’un interpréteur de script


L’exercice 2.1 consiste à modifier la couleur du conteneur principal(space) en noir et celle du robi en jaune. Ce
script comprend deux S-expressions : (space color black) (robi color yellow)

L’exercice2.2 constitue la suite de l'exercice 2.1, avec comme amélioration l'ajout de des commandes translate, sleep. La commande translate permet de déplacer avec un décalage en x et y passé en argument et la commande sleep permet une mise en sommeil entre deux déplacements.

### Exercice 3 : Introduction des commandes

L'exercice 3 a le même esprit que l'exercice précédent, il consiste à améliorer le code en réalisant des classes qui mettent en oeuvre l'interface command. Exécuter une commande de script reviens donc à envoyer le message run  à une instance d'une telle  classe.


### Exercice 4 : Sélection et exécution des commandes


## PARTIE CLIENT SERVEUR
