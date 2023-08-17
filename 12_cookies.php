<?php
// Les cookies permettent de stocker les donnee des visiteurs ou utilisateurs de votre site
// echo time();

setcookie('nom_utilisateur', 'Kamdjou', time() + 86400 * 30);

setcookie('age_utilisateur', '40', time() + 86400 * 10);

if (isset($_COOKIE['nom_utilisateur'])) {
    echo $_COOKIE['nom_utilisateur'];
}

echo '<br>';

if (isset($_COOKIE['age_utilisateur'])) {
    echo $_COOKIE['age_utilisateur'];
}

setcookie('nom_utilisateur', '', time() - 86400 * 30);

setcookie('age_utilisateur', '', time() - 86400 * 10);
