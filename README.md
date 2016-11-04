Psychomot
=========

				------------------------------
				Les psychomotriciennes du Mans
				------------------------------


Site créé par les élèves de la Wild Code School
.Ludovic Quouillault
.Florian Galerne
.Sylvie Rétat



+++++++
LE SITE
+++++++

Ce site en one-page (une seule page) est un site informatif et non commercial.
Il permet aux utilisateurs d'avoir des réponses à leurs questions sur la psychomotricité.
Divisé en 5 parties:
- L'accueil
- La psychomotricité
- Les psychomotriciennes du cabinet
- Les consultations
- Les contacts



	BARRE DE NAVIGATION
	===================
	Le logo à gauche, les différentes parties, le numéro de téléphone.


	L'ACCUEIL
	=========
	Composé seulement d'une photo du cabinet, avec le texte "CABINET DE PSYCHOMOTRICITÉ" et l'adresse du cabinet.


	PSYCHOMOTRICITÉ
	===============
	Cette partie est en accordéon. Elle est composé de trois sous partie :
	- La psychomotricité (qu'est ce que la psychomotricité ?)
	- Pour qui ? (Les personnes consernés par la psychomotricité)
	- Pourquoi ? (Les symptômes et les solutions)

	Elle possède une image par sous-partie qui se réduit pour accompagner le texte lorsque l'on déploit l'accordeon.

	Le fond est de la couleur principale du site.


	LES PSYCHOMOTRICIENNES
	======================
	Descritpion du parcours des deux psychomotriciennes du cabinet, avec une photo.


	CONSULTATIONS
	=============
	Nouvel accordeon avec trois sous-partie:
	- Consultation (le déroulement d'une séance)
	- Atelier de prévention (possibilité de demandé une intervention des psychomotriciennes dans les établissements scolaires...)
	- Bilan et tarifs


	CONTACT
	=======
	Adresse, téléphone...
	Map
	Possibilité d'envoyer un mail directement du site.


	PIED DE PAGE
	============
	Mentions légales et crédit


Couleur du site : #82bdb5



+++++++++++++
MISE EN PLACE
+++++++++++++

-> git clone git@github.com:sylvie41/Psychomot.git
-> cd Psychomot/
-> composer install
-> php app/console doctrine:database:create
-> php app/console assets:install --symlink
-> php app/console doctrine:schema:update --force
-> php app/console cache:clear



+++++++++++++++++++++++++++
CREER UN NOUVEL UTILISATEUR
+++++++++++++++++++++++++++

Pour créer un nouvel utilisateur, taper dans le terminal :

->php app/console fos:user:create adminuser --super-admin






A Symfony project created on October 27, 2016, 1:16 pm.