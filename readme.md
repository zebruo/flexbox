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

📖 Générateur Flexbox Dynamique Avancé
Ce projet est une interface web permettant de générer et de tester des mises en page Flexbox complexes. Il permet de visualiser instantanément l'impact des propriétés CSS sur le rendu visuel et fournit le code HTML/CSS prêt à l'emploi.

✨ Fonctionnalités Clés
Contrôle du Conteneur Principal : Modifiez la direction (row, column), le wrap, l'alignement (justify-content, align-items) et la distribution du contenu.

Personnalisation Individuelle des Éléments :

Réglez l'ordre d'affichage (order).

Gérez la flexibilité (flex-grow, flex-shrink, flex-basis).

Définissez des alignements spécifiques via align-self.

Gestion de Contenus Variés : Basculez entre du texte généré (Lorem Ipsum) ou des images pour tester la réactivité des blocs.

Sous-conteneurs Imbriqués : Possibilité de transformer un élément en un nouveau conteneur flex pour créer des structures de mise en page avancées.

Simulateur de Media Queries : Définissez un seuil de largeur (breakpoint) et changez la direction du flux pour simuler un affichage mobile.

🛠️ Utilisation
Configuration globale : Utilisez le panneau du haut pour définir le comportement général du conteneur.

Génération : Choisissez le nombre d'éléments souhaités et cliquez sur "Générer les éléments".

Ajustements précis : Pour chaque élément, ajustez ses propriétés spécifiques ou activez l'option "Sous-conteneur".

Exportation : Copiez le code généré dans les sections CSS et HTML en bas de page pour l'utiliser dans vos propres projets.