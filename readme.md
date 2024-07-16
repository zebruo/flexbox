Ce script offre une interface complète pour expérimenter et comprendre les propriétés CSS flexbox de manière interactive et visuelle :

1. **Conteneur Principal** :
   - **Direction (flex-direction)** : Contrôle l'orientation des éléments enfants (row, row-reverse, column, column-reverse).
   - **Wrap (flex-wrap)** : Définit le comportement des éléments lorsqu'ils dépassent la largeur du conteneur (nowrap, wrap, wrap-reverse).
   - **Justify Content** : Contrôle l'alignement des éléments sur l'axe principal (flex-start, flex-end, center, space-between, space-around, space-evenly).
   - **Align Items** : Aligne les éléments sur l'axe transversal (stretch, flex-start, flex-end, center, baseline).
   - **Align Content** : Aligne les lignes flexibles sur l'axe transversal (stretch, flex-start, flex-end, center, space-between, space-around).

2. **Éléments Flexbox** :
   - **Order** : Définit l'ordre d'affichage des éléments.
   - **Flex Grow** : Contrôle la croissance des éléments en fonction de l'espace disponible.
   - **Flex Shrink** : Contrôle la réduction des éléments en fonction de l'espace restreint.
   - **Flex Basis** : Définit la taille de base des éléments.
   - **Align Self** : Spécifie l'alignement individuel d'un élément (auto, flex-start, flex-end, center, baseline, stretch).
   - **Contenu** : Choix entre du texte généré aléatoirement ou une image.

3. **Sous-conteneurs** :
   - Les mêmes propriétés flexbox peuvent être appliquées aux sous-conteneurs et leurs éléments enfants.

4. **Media Queries** :
   - Contrôle la direction du conteneur principal pour les petits écrans, permettant d'ajuster la mise en page responsive.

Le script génère et affiche aussi le CSS et HTML résultants en temps réel, permettant à l'utilisateur de voir immédiatement les changements visuels et le code correspondant