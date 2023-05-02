<?php
require 'vendor/autoload.php';

//*                    // Match all request URIs
//[i]                  // Match an integer
//[i:id]               // Match an integer as 'id'
//[a:action]           // Match alphanumeric characters as 'action'
//[h:key]              // Match hexadecimal characters as 'key'
//[:action]            // Match anything up to the next / or end of the URI as 'action'
//[create|edit:action] // Match either 'create' or 'edit' as 'action'
//[*]                  // Catch all (lazy, stops at the next trailing slash)
//[*:trailing]         // Catch all as 'trailing' (lazy)
//[**:trailing]        // Catch all (possessive - will match the rest of the URI)
//.[:format]?          // Match an optional parameter 'format' - a / or . before the block is also optional


$router = new AltoRouter();

$router->setBasePath('/super-week');

// Route pour la page d'accueil
$router->map('GET', '/', function(){
    echo "<h1>Bienvenue sur l'acceuil</h1>";
}, 'index');

// Route pour la page User
$router->map('GET', '/users', function(){
    echo "<h1>Bienvenue sur la liste des utilisateurs</h1>";
}, 'users');

// Route pour une page utilisateur spécifique
$router->map('GET', '/users/[i:id]', function($id) {
    echo "<h1>Bienvenue sur la page de l'utilisateur " . $id . "</h1>";
}, 'users/id');

// Vérifier les routes et exécuter la correspondante
$match = $router->match();

if ($match) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // Gérer les erreurs 404 si aucune route correspondante n'est trouvée
    echo 'Page non trouvée';
}


?>


<!-- <h1>Bienvenue sur mon site</h1> -->