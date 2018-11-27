<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

/* Décommenter pour voir les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', true);
*/


// --------------------------- //
//          SESSIONS           //
// --------------------------- //

ini_set('session.cookie_lifetime', false);
session_start();


// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Flocasia");
define("WEBSITE_NAME", "Flocasia official website");
define("WEBSITE_URL", "https://flocasia.com");
define("WEBSITE_DESCRIPTION", "T");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "FR, EN");
define("WEBSITE_AUTHOR", "Quentin GANS");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "");
define("DATABASE_NAME", "");
define("DATABASE_USER", "");
define("DATABASE_PASSWORD", "");


