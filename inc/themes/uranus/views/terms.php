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

        <title><?= __("Terms of Services") . " - " . site_settings("site_name") ?></title>
        
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGPZPLD');</script>
<!-- End Google Tag Manager -->
        
    </head>

    <body>
        
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGPZPLD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        
        <?php include 'sections/header.php'; ?>
        
        <div class="static-page">
            <div class="wrapper">
                <h1 class="title"><?= __("Terms of Services") ?></h1>

                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum sagittis eros, non euismod turpis placerat vitae. Vivamus et fringilla quam. Sed et fermentum lectus, quis hendrerit sem. In id ullamcorper sapien, ac porta mi. Mauris vehicula sagittis tempor. Quisque venenatis vel est sit amet consequat. Vivamus ut ligula ligula. Pellentesque aliquam tortor ut lacus volutpat vulputate ac ut dui. Suspendisse malesuada neque sem, id vulputate risus lacinia id. Pellentesque ornare ultricies feugiat.Nam nec elit non felis ultrices suscipit non et elit. Suspendisse potenti. Phasellus blandit, nulla euismod tincidunt ultrices, turpis purus accumsan neque, nec cursus erat dui eu ipsum. Sed ut cursus metus, nec porttitor turpis. Donec tellus ante, auctor vitae bibendum sit amet, mollis nec lacus. Morbi luctus eros sem, nec pellentesque tortor vehicula tristique. Vivamus nec sagittis velit. Suspendisse potenti. Duis ut vestibulum eros, at interdum mi. Quisque tempus eu tortor nec dignissim. Quisque vitae facilisis purus, a rutrum metus. Aenean a nibh non lectus bibendum vestibulum eget eget metus. Vestibulum posuere suscipit metus in ullamcorper. Aenean ultricies velit ac efficitur auctor. Morbi efficitur metus eu odio suscipit ultrices. Sed vestibulum semper dui, sed finibus magna pulvinar vel. Duis in ligula non urna aliquet ullamcorper id id orci. Praesent sed eleifend elit, quis placerat lorem. Maecenas vel neque eros. Quisque euismod sapien dolor, quis aliquam dolor gravida quis.</p>
                    <p>Nam nec elit non felis ultrices suscipit non et elit. Suspendisse potenti. Phasellus blandit, nulla euismod tincidunt ultrices, turpis purus accumsan neque, nec cursus erat dui eu ipsum. Sed ut cursus metus, nec porttitor turpis. Donec tellus ante, auctor vitae bibendum sit amet, mollis nec lacus. Morbi luctus eros sem, nec pellentesque tortor vehicula tristique. Vivamus nec sagittis velit. Suspendisse potenti. Duis ut vestibulum eros, at interdum mi. Quisque tempus eu tortor nec dignissim. Quisque vitae facilisis purus, a rutrum metus. Aenean a nibh non lectus bibendum vestibulum eget eget metus. Vestibulum posuere suscipit metus in ullamcorper.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum sagittis eros, non euismod turpis placerat vitae. Vivamus et fringilla quam. Sed et fermentum lectus, quis hendrerit sem. In id ullamcorper sapien, ac porta mi. Mauris vehicula sagittis tempor. Quisque venenatis vel est sit amet consequat. Vivamus ut ligula ligula. Pellentesque aliquam tortor ut lacus volutpat vulputate ac ut dui. Suspendisse malesuada neque sem, id vulputate risus lacinia id. Pellentesque ornare ultricies feugiat. Nam nec elit non felis ultrices suscipit non et elit. Suspendisse potenti. Phasellus blandit, nulla euismod tincidunt ultrices, turpis purus accumsan neque, nec cursus erat dui eu ipsum. Sed ut cursus metus, nec porttitor turpis. Donec tellus ante, auctor vitae bibendum sit amet, mollis nec lacus. Morbi luctus eros sem, nec pellentesque tortor vehicula tristique. Vivamus nec sagittis velit. Suspendisse potenti. Duis ut vestibulum eros, at interdum mi. Quisque tempus eu tortor nec dignissim. Quisque vitae facilisis purus, a rutrum metus. Aenean a nibh non lectus bibendum vestibulum eget eget metus. Vestibulum posuere suscipit metus in ullamcorper. Aenean ultricies velit ac efficitur auctor. Morbi efficitur metus eu odio suscipit ultrices. Sed vestibulum semper dui, sed finibus magna pulvinar vel. Duis in ligula non urna aliquet ullamcorper id id orci. Praesent sed eleifend elit, quis placerat lorem. Maecenas vel neque eros. Quisque euismod sapien dolor, quis aliquam dolor gravida quis.</p>
                </div>
            </div>
        </div>

        <?php include 'sections/footer.php'; ?>
    
        <script src="<?= active_theme("uri") . "/assets/js/core.js?v=" . VERSION ?>"></script>
    </body>
</html>