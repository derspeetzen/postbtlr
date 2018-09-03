<?php 
    namespace Themes\Uranus;

    // Disable direct access
    if (!defined('APP_VERSION')) {
        die("You're not authorized to view this page."); 
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta name="theme-color" content="#fff">

        <meta name="description" content="<?= site_settings("site_description") ?>">
        <meta name="keywords" content="<?= site_settings("site_keywords") ?>">

        <link rel="icon" href="<?= site_settings("logomark") ? site_settings("logomark") : THEMES_URL . "/" . IDNAME ."/assets/img/favicon.png" ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= site_settings("logomark") ? site_settings("logomark") : THEMES_URL . "/" . IDNAME ."/assets/img/favicon.png" ?>" type="image/x-icon">

        <link rel="stylesheet" href="<?= active_theme("uri") . "/assets/css/fonts.css?v=" . VERSION ?>">
        <link rel="stylesheet" href="<?= active_theme("uri") . "/assets/css/vendor.css?v=" . VERSION ?>">
        <link rel="stylesheet" href="<?= active_theme("uri") . "/assets/css/core.css?v=" . VERSION ?>">

        <script src="<?= active_theme("uri") . "/assets/js/vendor.js?v=" . VERSION ?>"></script>

        <title><?= __("Password Recovery") . " - " . site_settings("site_name") ?></title>
    </head>

    <body class="alternatebg">
        <div class="signinarea">
            <div class="inner">
                <a class="logo" href="<?= APPURL ?>">
                    <img src="<?= site_settings("logotype") ? site_settings("logotype") : THEMES_URL . "/" . IDNAME . "/assets/img/logo.svg" ?>" 
                         alt="<?= site_settings("site_name") ?>">
                </a>

                <h1 class="title"><?= __("Password Recovery") ?></h1>

                <?php if (empty($success)): ?>
                    <div class="box">
                        <form action="<?= APPURL."/recovery" ?>" method="POST" autocomplete="off">
                            <input type="hidden" name="action" value="recover">

                            <?php if (!empty($error)): ?>
                                <div class="form-result m-bottom-20">
                                    <div class="color-danger">
                                        <span class="fas fa-times"></span>
                                        <?= $error ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="m-bottom-20">
                                <input class="input" type="text" name="email" placeholder="<?= __("Your e-mail adress") ?>" value="<?= htmlchars(\Input::Post("email")) ?>">
                            </div>

                            <input type="submit" class="fluid button" value="<?= __("Submit") ?>">                                  
                        </form> 
                    </div>

                    <div class="bottom_text">
                        <?= __("Enter your registration email address to receive password reset instructions.") ?>
                    </div>
                <?php else: ?>
                    <div class="box">
                        <div class="email_box">
                            <h2><?= __("Email Sent!") ?></h2>
                            <p><?= __("Password reset instruction sent to your email adress.") ?></p>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    
        <script src="<?= active_theme("uri") . "/assets/js/core.js?v=" . VERSION ?>"></script>
    </body>
</html>