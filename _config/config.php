<?php

// -------------------------------------------- //
//                     SESSIONS                 //
// -------------------------------------------- //



ini_set('session.cookie_lifetime', false);
session_start();


// -------------------------------------------------- //
//                     Errors Display                //
// ------------------------------------------------ //
error_reporting(E_ALL);
init_set('display_errors',true);


// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "Marked");
define("WEBSITE_NAME", "Marked");
define("WEBSITE_URL", "https://Marked.com");
define("WEBSITE_DESCRIPTION", "convertisseur markdown to HTML");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "test");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");
