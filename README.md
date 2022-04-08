# PROJET DE SYNTHESE : READ ME
## AUTEURS :

AMRI Ibrahim

LERHRIBI Douha

ELAATFI Mohamed

KADRI Youssef

KONATE ASHLEY WITNEY

# DESCRIPTION DU PROJET
Le Projet de synthèse L3 IFA/CDA  est constituée de deux parties, la première partie consite à développer un prototype de moniteur pour un système de commande pour des éléments graphiques. Dans la version minimal, il sagit d'une forme géométrique basique(rectangle,ligne,ellipse etc). Le moniteur permettra donc de les installer dans un conteneur et de les animers.
La seconde partie est constituée d'un principe client-serveur socket.
Le client ROBI saisit un programme ROBI et l'envoi vers un serveur ROBI. Nous avons utilisé JAVA FX.


## ROBI PARTIE 1 : Développement d’un langage de script pour des animations graphiques simples 

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

L’exercice2.2 constitue la suite de l'exercice 2.1, avec comme amélioration l'ajout des commandes translate, sleep. La commande translate permet de déplacer avec un décalage en x et y passé en argument et la commande sleep permet une mise en sommeil entre deux déplacements.

### Exercice 3 : Introduction des commandes

L'exercice 3 a le même esprit que l'exercice précédent, il consiste à améliorer le code en réalisant des classes qui mettent en oeuvre l'interface command. Exécuter une commande de script reviens donc à envoyer le message run  à une instance d'une telle  classe.


### Exercice 4 : Sélection et exécution des commandes

L'idée de l"exercice 4 est de travailler avec plus d'objets(oval, String etc), en utilisant les classes environnement et les références qui contiennent les références des objets crées.

#### Exercice 4.1 : Référencement des objets et enregistrement des commandes

L'utilisateur saisie des S-expressions au clavier qui déclenche les classes Environnement() et Référence(). 
La classe Environnement() est une classe globale de notre environnement qui contient les références des objets( Robi et Space).
La classe Référence() permet de référencer un objet graphique à un ensemble de commandes nommées.

#### Exercice 4.2 : Ajout et suppression dynamique d’éléments graphiques

L'exercice 4.2 est la suite de l'exercice précédent, il a comme amélioration l'ajout de nouveaux éléments (Oval,Image, ajouter une image ou une chaine de caractere etc) et la suppression de ces derniers. Les classes corselets(), SetColorSpace(), Translate(), Sleep() ,AddElement(), 
DelElement(), SetDim(), NewImage() et NewString() ont également étées ajoutés.


#### Exercice 5 : Ajouter des éléments à des conteneurs

L'exercice 5 consiste à ajouter un élément ou plusieurs dans des conteneurs. Par exemple un robi qui a été ajouté à un space poura contenir un autre robi.
La suppression consiste à supprimer les instances des références des objets de l'environnement. Pour notre cas, on a supprimé l'objet à l'intérieur du space pour le premier niveau (space.robi) par contre si on rajoute un autre objet dans le robi, la référence de ce dernier ne sera pas supprimé de l'environnement.

## PARTIE CLIENT SERVEUR AVEC SOCKET

Pour la deuxième partie du projet (ROBIC, JavaFX et sockets), notre code s'éxecute en distanciel, en se connectant en tant que client à un serveur,par le biais de sockets (client-serveur). Le client saisie une S-expression au serveur, ce dernier l'exécute et réponds en envoyant la trace d'exécution.

### La partie du client :
L'interface du client est représenté en utilisant le framework JavaFX.
Cette partie permet à un ou plusieurs clients de se connecter au serveur (machine distante : localhost, port : 8000) en utilisant le multithreading, plus précisement, chaque client est traité par un thread.
Après la connexion, un message s'affiche dans la trace d'exécution indiquant que le client a bien été connecté. Le client  pourra ensuite exécuter son programme ROBI. 
Une fois le programme  exécuté le serveur transmets sur la socket, la trace d'exécution de ce dernier.
Si le client veut interrompre son programme ROBI, il clique sur le bouton "Interruption" ce qui le déconnectera du serveur et il ne pourra exécuter un nouveau programme que si une nouvelle connexion s'établie.

### La partie du serveur :
Pour la partie du serveur ROBI,
On a utilisé l'intrepréteur de la partie 1 du projet, celui de l'exercice 4 pour complier le programme.
Le serveur peut recevoir plusieurs clients à la fois et peut exécuter plusieurs programmes de chaque client connecté. 
A chaque exécution d'un programme ROBI, le serveur envoie l'ensemble des traces des S-expressions exécutés.


### La partie interface :
Notre interface javaFX contient deux champs de type textArea l’un pour la saisie du script S-expression que l’on doit envoyer au serveur et l’autre doit afficher la trace d’exécution envoyée par le serveur .
On a aussi deux champs de type TextField l’un pour saisir l’adresse IP et l’autre pour la
saisie du port permettant au client de se connecter au serveur en cliquant sur le bouton
"Valider" et un autre bouton pour exécuter le(s) S-expression(s) "Exécuter le programme robi". Et finalement, un bouton "interruption" pour la déconnexion du client du serveur.

## Ce qu'on a pas pu faire 
#### On a ajouté la possibilité d'ajouter la trace sous forme d'image(capture d'ecrant) mais on ne l'a pas affiché sur l'interface graphique. 
#### L'exécution des scripts ligne par ligne
