1/ Créez un site avec 4 pages :
- Accueil (mettez-y ce que vous voulez)
- About (mettez-y ce que vous voulez)
- Connexion
- Déconnexion

Chaque page visuelle intègre un menu 
Ne faites pas de copier-coller !

La page de connexion propose un formulaire qui prend deux informations : identifiant et mot de passe. Les informations sont comparées, à la soumission, aux valeurs stockées dans deux variables. Si elles sont correctes, une session est créée et l'utilisateur est redirigé vers la page d'accueil. Sinon, un message d'erreur est affiché.

La page de déconnexion détruit la session avant de rediriger vers la page d'accueil.

----------------------

2/ Créez un fichier utilisateurs.json, dans lequel seront stockées les informations d'un utilisateur (identifiant, mot de passe, pseudo).

Modifiez la page de connexion pour utiliser ce fichier JSON au lieu des deux variables.

----------------------

3/ Créez une page d'inscription, et ajoutez son lien dans le menu.
Cette page propose un formulaire qui, à la soumission, est vérifié et, si les informations sont correctes, l'utilisateur est ajouté au fichier utilisateurs.json.

----------------------

4/ Ajoutez une case "Se souvenir de moi" au formulaire de connexion. Lorsque cette case est cochée, à la connexion, un cookie est créé et contient de quoi se souvenir de l'utilisateur.

Si un utilisateur arrive sur le site sans session mais avec ce cookie, il est connecté d'office.

----------------------

5/ Un utilisateur dispose à présent d'un avatar. Ajoutez un champ fichier au formulaire d'inscription qui n'accepte que des images pas trop grosses.

A la soumission du formulaire d'inscription, le fichier est uploadé sur le serveur.

L'avatar doit être stocké dans le fichier utilisateurs.json.

Un utilisateur connecté voit son avatar dans le menu de navigation.
