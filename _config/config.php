<?php

// -------------------------------------------- //
//                     SESSIONS                 //
// -------------------------------------------- //

session_start();



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
define("DATABASE_NAME", "db_name");
define("DATABASE_USER", "db_user");
define("DATABASE_PASSWORD", "db_password");
