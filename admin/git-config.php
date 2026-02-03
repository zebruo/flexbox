<?php
/**
 * Configuration du gestionnaire Git
 * Modifiez ces valeurs selon votre environnement
 */

return [
    // Identité Git pour les commits
    'userName' => 'zebruo',
    'userEmail' => 'zebruo@users.noreply.github.com',

    // Options d'affichage (facultatif)
    'options' => [
        'maxHistoryItems' => 20,      // Nombre de commits dans l'historique
        'maxFileLogItems' => 10,      // Nombre de commits par fichier
    ]
];