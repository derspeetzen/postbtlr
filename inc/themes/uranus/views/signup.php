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
        <?php if ($recaptcha_enabled): ?>
            <script src="https://www.google.com/recaptcha/api.js?hl=<?= active_lang("shortcode") ?>" async defer></script>
        <?php endif ?>

        <title><?= __("Signup for free account") . " - " . site_settings("site_name") ?></title>
        
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

                <h1 class="title"><?= __("Signup for free account") ?></h1>

                <div class="box">
                    <form action="<?= APPURL."/signup" ?>" method="POST" autocomplete="off">
                        <input type="hidden" name="action" value="signup">
                        <?php if ($Package->isAvailable()): ?>
                            <input type="hidden" name="package" value="<?= $Package->isAvailable() ? $Package->get("id") : "" ?>">
                        <?php else: ?>
                            <input type="hidden" name="package" value="<?= htmlchars(\Input::post("package")) ?>">
                        <?php endif ?>

                        <?php if (!empty($errors)): ?>
                            <div class="form-result text-l m-bottom-40">
                                <?php foreach ($errors as $error): ?>
                                    <div class="color-danger">
                                        <span class="fas fa-times"></span>
                                        <?= $error ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="step <?= $active_step == "1" ? "" : "none" ?>" data-step="1">
                            <div class="m-bottom-20">
                                <input class="input js-required" type="text" name="firstname" placeholder="<?= __("Firstname") ?>" value="<?= htmlchars(\Input::Post("firstname")) ?>">
                            </div>

                            <div class="m-bottom-20">
                                <input class="input js-required" type="text" name="lastname" placeholder="<?= __("Lastname") ?>" value="<?= htmlchars(\Input::Post("lastname")) ?>">
                            </div>

                            <div class="m-bottom-20">
                                <input class="input js-required" type="text" name="email" placeholder="<?= __("Email address") ?>" value="<?= htmlchars(\Input::Post("email")) ?>">

                                <div class="form-result m-top-5 none js-emailcheck">
                                    <div class="color-danger"></div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="fluid button js-nextbtn">
                                <?= __("Next") ?>
                                <span class="fas fa-arrow-right m-left-5"></span>
                            </a>
                        </div>

                        <div class="step <?= $active_step == "2" ? "" : "none" ?>" data-step="2">
                            <div class="m-bottom-20">
                                <input class="input js-required" type="password" name="password" placeholder="<?= __("Password") ?>">
                            </div>

                            <div class="m-bottom-20">
                                <input class="input js-required" type="password" name="password-confirm" placeholder="<?= __("Confirm password") ?>">
                            </div>

                            <div class="m-bottom-20">
                                <div class="selectbox">
                                    <select name="timezone" class="input">
                                        <?php 
                                            $tz = $IpInfo->timezone;
                                            if (\Input::post("timezone")) {
                                                $tz = \Input::post("timezone");
                                            }
                                        ?>
                                        <?php foreach ($TimeZones as $k => $v): ?>
                                            <option value="<?= $k ?>" <?= $k == $tz ? "selected" : "" ?>><?= $v ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <?php if ($recaptcha_enabled): ?>
                                <input type="hidden" name="recaptcha" value="1">
                                
                                <div class="m-bottom-20 recaptcha">
                                    <div class="g-recaptcha" 
                                         data-sitekey="<?= htmlchars(get_option("np_recaptcha_site_key")) ?>"></div>

                                    <div class="recaptcha-error"></div>
                                </div>
                            <?php endif ?>

                            <input type="submit" value="<?= __("Signup") ?>" class="none">
                            <a href="javascript:void(0)" class="fluid button js-fake-submit"><?= __("Signup") ?></a>
                        </div>

                        <div class="formnav flex flex-middle">
                            <span class="label" data-text="<?= __("Step %s", "{step}") ?>">
                                <?= __("Step %s", "1") ?>
                            </span>

                            <div class="flex flex-middle">
                                <a href="javascript:void(0)" class="dot <?= $active_step == "1" ? "active": "" ?>"></a>
                                <a href="javascript:void(0)" class="dot <?= $active_step == "2" ? "active": "" ?>"></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bottom_text">
                    <div><?= __("By creating an acount you agree to our <a href='%s'>terms of services</a>.", APPURL . "/terms") ?></div>
                    <a href="<?= APPURL . "/login" ?>"><?= __("Already have an account?") ?></a>
                </div>
            </div>
        </div>
    
        <script src="<?= active_theme("uri") . "/assets/js/core.js?v=" . VERSION ?>"></script>
        <script>
            $(function() {
                uranus.signup();
            });
        </script>
    </body>
</html>