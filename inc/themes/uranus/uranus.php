<?php 
namespace Themes\Uranus;

// Disable direct access
if (!defined('APP_VERSION')) {
    die("You're not authorized to view this page."); 
}

// Define the constants in the current namespace
$config = include 'config.php';
define(__NAMESPACE__. "\IDNAME", $config["idname"]);
define(__NAMESPACE__. "\VERSION", $config["version"]);


/**
 * Add routes for the theme pages
 */
function add_routes()
{
    // Language slug
    $langs = [];
    foreach (\Config::get("applangs") as $l) {
        if (!in_array($l["code"], $langs)) {
            $langs[] = $l["code"];
        }

        if (!in_array($l["shortcode"], $langs)) {
            $langs[] = $l["shortcode"];
        }
    }
    $langslug = $langs ? "[".implode("|", $langs).":lang]" : "";

    // Index (Landing Page)
    // 
    // Replace "IndexController" with "LoginController" to completely disable Landing page 
    // After this change, Login page will be your default landing page
    // 
    // This is useful in case of self use, or having different 
    // landing page in different address. For ex: you can install the script
    // to subdirectory or subdomain of your wordpress website.
    \App::addRoute("GET", "/", [
        THEMES_PATH . "/" . IDNAME . "/controllers/IndexController.php",
        __NAMESPACE__ . "\IndexController"
    ]);
    \App::addRoute("GET", "/" . $langslug . "?/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/IndexController.php",
        __NAMESPACE__ . "\IndexController"
    ]);


    // Login
    \App::addRoute("GET|POST", "/" . $langslug . "?/login/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/LoginController.php",
        __NAMESPACE__ . "\LoginController"
    ]);

    // Signup
    \App::addRoute("GET|POST", "/" . $langslug . "?/signup/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/SignupController.php",
        __NAMESPACE__ . "\SignupController"
    ]);

    // Recovery
    \App::addRoute("GET|POST", "/".$langslug."?/recovery/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/RecoveryController.php",
        __NAMESPACE__ . "\RecoveryController"
    ]);
    \App::addRoute("GET|POST", "/".$langslug."?/recovery/[i:id].[a:hash]/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/PasswordResetController.php",
        __NAMESPACE__ . "\PasswordResetController"
    ]);


    // Privacy Policy
    \App::addRoute("GET", "/" . $langslug . "?/privacy/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/PrivacyController.php",
        __NAMESPACE__ . "\PrivacyController"
    ]);

    // Terms of Services
    \App::addRoute("GET", "/" . $langslug . "?/terms/?", [
        THEMES_PATH . "/" . IDNAME . "/controllers/TermsController.php",
        __NAMESPACE__ . "\TermsController"
    ]);
}
\Event::bind("router.map", __NAMESPACE__ . '\add_routes');

