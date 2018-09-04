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

        <title><?= __("Login") . " - " . site_settings("site_name") ?></title>
        
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

                <h1 class="title"><?= __("Sign in to your account") ?></h1>

                <div class="box">
                    <?php if($Integrations->get("data.facebook.app_id") && $Integrations->get("data.facebook.app_secret")): ?>
                        <div class="m-bottom-20">
                            <a class="fbloginbtn disabled" href="javascript:void(0)">
                                <span class="icon fab fa-facebook-square"></span>
                                <?= __("Login with Facebook") ?>
                            </a>
                        </div>
                    <?php endif ?>

                    <form action="<?= APPURL."/login" ?>" method="POST" autocomplete="off">
                        <input type="hidden" name="action" value="login">

                        <?php if (\Input::post("action") == "login"): ?>
                            <div class="form-result m-bottom-20">
                                <div class="color-danger">
                                    <span class="fas fa-times"></span>
                                    <?= __("Login credentials didn't match!") ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="m-bottom-20">
                            <input class="input" type="text" name="username" placeholder="<?= __("E-mail adress") ?>" value="<?= htmlchars(\Input::Post("username")) ?>">
                        </div>

                        <div class="m-bottom-20">
                            <input class="input" type="password" name="password" placeholder="<?= __("Password") ?>">
                        </div>

                        <input type="submit" class="fluid button" value="<?= __("Sign in") ?>">

                        <div class="actions flex flex-between flex-middle">
                            <label>
                                <input type="checkbox" class="checkbox" name="remember" value="1" <?= \Input::post("remember") ? "checked" :"" ?> />
                                <div>
                                    <span class="icon unchecked far fa-square"></span>
                                    <span class="icon checked fas fa-check-square"></span>

                                    <?= __("Remember me") ?>
                                </div>
                            </label>

                            <div class="forgot_pass">
                                <a href="<?= APPURL . "/recovery" ?>"><?= __("Forgot Password?") ?></a>
                            </div>
                        </div>                                    
                    </form> 
                </div>

                <div class="bottom_text">
                    <?= __("Need an account?") ?> <a href="<?= APPURL . "/signup" ?>"><?= __("Sign up") ?></a>
                </div>
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