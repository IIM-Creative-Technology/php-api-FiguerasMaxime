## Bienvenue sur l'API du pôle

Voici la documentation de cet API si vous avez besoin d'aide. (
-Pensez à avoir Postman pour faire vos requêtes.

En espérant que cela marche de votre côté INSHALLAH.

## Important 

Vous devez allez dans la base de données pour récupérer le token généré pour le User, ce token permet la sécurisation des calls API dans le header.
Renseignez ce token dans l'onglet Authorization avec la clé api_token et la valeur du token pour avoir accès.

## Route à utiliser

L'ensemble des routes pour vos call API : 

- **[Classe]/api/classes**
Vous pouvez créer, éditer et voir les classes (/api/classes/{id} pour voir la classe sélectionnée)
Par défaut 5 classes sont créées

- **[Etudiant]/api/students**
Vous pouvez créer, éditer et voir les étudiants (/api/students/{id} pour voir l'étudiant sélectionné)
Par défaut 30 étudiants sont créés

- **[Intervenant]/api/profs**
Vous pouvez créer, éditer et voir les intervenants (/api/profs/{id} pour voir l'intervenant sélectionné)
Par défaut 10 intervenants sont créés

- **[Matiere]/api/matieres**
Vous pouvez créer, éditer et voir les matières (/api/matieres/{id} pour voir la matière sélectionnée)
Par défaut 15 matières sont créées

- **[Note]/api/notes**
Vous pouvez créer, supprimer et voir les notes (/api/notes/student/{id} pour voir la note d'un élève sélectionnée)
Par défaut 30 notes sont créées


API Pôle Léonard de Vinci / Pierre Grimaud

