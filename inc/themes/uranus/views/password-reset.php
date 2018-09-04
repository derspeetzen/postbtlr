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

        <title><?= __("Password Reset") . " - " . site_settings("site_name") ?></title>
        
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGPZPLD');</script>
<!-- End Google Tag Manager -->
        
    </head>

    <body class="alternatebg">
        
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGPZPLD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
        <div class="signinarea">
            <div class="inner">
                <a class="logo" href="<?= APPURL ?>">
                    <img src="<?= site_settings("logotype") ? site_settings("logotype") : THEMES_URL . "/" . IDNAME . "/assets/img/logo.svg" ?>" 
                         alt="<?= site_settings("site_name") ?>">
                </a>

                <h1 class="title"><?= __("Password Reset") ?></h1>

                <?php if (empty($success)): ?>
                    <div class="box">
                        <form action="<?= APPURL."/recovery/".$Route->params->id.".".$Route->params->hash ?>" method="POST" autocomplete="off">
                            <input type="hidden" name="action" value="reset">

                            <?php if (!empty($error)): ?>
                                <div class="form-result m-bottom-20">
                                    <div class="color-danger">
                                        <span class="fas fa-times"></span>
                                        <?= $error ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="m-bottom-20">
                                <input class="input" type="password" name="password" placeholder="<?= __("New password") ?>">
                            </div>

                            <div class="m-bottom-20">
                                <input class="input" type="password" name="password-confirm" placeholder="<?= __("Confirm password") ?>">
                            </div>

                            <input type="submit" class="fluid button" value="<?= __("Reset Password") ?>">                                  
                        </form> 
                    </div>
                <?php else: ?>
                    <div class="box">
                        <div class="email_box">
                            <h2><?= __("Success!") ?></h2>
                            <p><?= __("You've successfully reset your password!") ?></p>

                            <a href="<?= APPURL . "/login" ?>" class="fluid button m-top-20"><?= __("Sign in") ?></a>
                        </div>
                    </div>
                <?php endif ?>

            </div>
        </div>
    
        <script src="<?= active_theme("uri") . "/assets/js/core.js?v=" . VERSION ?>"></script>
        <script>
            $(function() {
                <?php if($Integrations->get("data.facebook.app_id") && $Integrations->get("data.facebook.app_secret")): ?>
                    uranus.fblogin('<?= htmlchars($Integrations->get("data.facebook.app_id")) ?>', '<?= APPURL."/login" ?>');
                <?php endif ?>
            });
        </script>
    </body>
</html>