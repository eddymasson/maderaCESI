=======
# maderaCESI

Lien du tuto : http://symfony.com/doc/current/bundles/SonataAdminBundle/getting_started/installation.html

script pour la base local "script_symfony.sql"

Etape 1) importer la source du projet
2) Lancer le serveur mysql - php en local (WAMP)
2) se placer dans le dossier "CODE SOURCE "en local et executer la commande "composer update" pour installer les bundles etc...
3) Lancer la commande : "php app/console server:run" pour lancer le serveur et naviguer sur http://localhost:8000/admin pour utiliser l'application

Note : Penser à modifier les identifiants de connexion dans /app/config/parameters.yml pour votre base en local si la connexion échoue
