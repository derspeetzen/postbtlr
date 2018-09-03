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

        <title><?= site_settings("site_name") ?></title>
    </head>

    <body class="mainbg">
        <?php include 'sections/header.php'; ?>

        <section id="home-top">
            <div class="wrapper">
                <div class="manage-holder">
                    <div class="clearfix">
                        <div class="managing_accounts">
                            <h2 class="section-title"><?= __("Save time managing your Instagram accounts") ?></h2>
                            <p class="section-desc"><?= __("A smarter way to auto post on Instagram") ?></p>

                            <div class="link_group">
                                <a href="#" class="white-button" data-scroll="pricing"><?= __("Get Now") ?></a>
                                <a href="<?= APPURL . "/login" ?>" class="purple-button"><?= __("Demo Version") ?></a>
                            </div>
                        </div>
                        <div class="bg_animation_section">
                            <div class="oval_1"></div>
                            <div class="oval_2"></div>
                            <div class="oval_3"></div>
                            <div class="oval_4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="manage" data-scroll="about">
            <div class="wrapper">
                <div class="about_manage">
                    <div class="clearfix">
                        <div class="about_box">
                            <div class="section-pretitle"><?= __("Manage Your Accounts") ?></div>
                            <h2 class="section-title"><?= __("The following features to help you save time") ?></h2>

                            <a href="#" class="purple-button" data-scroll="pricing"><?= __("Get Started") ?></a>
                        </div>

                        <div class="modules_list">
                            <div class="module_box left_box" data-position="middle-box">
                                <div class="oval bg_pink">
                                    <i class="mdi">video_library</i>
                                </div>

                                <h4 class="title"><?= __("Photo, Story, Video & Album") ?></h4>
                                <p class="desc"><?= __("Automatically post all content") ?></p>
                            </div>

                            <div class="module_box" data-position="top-box">
                                <div class="oval bg_orange">
                                    <i class="mdi">group</i>
                                </div>

                                <h4 class="title"><?= __("Multi Instagram Accounts") ?></h4>
                                <p class="desc"><?= __("Post to all of your Instagram accounts easily") ?></p>
                            </div>

                            <div class="module_box"  data-position="bottom-box">
                                <div class="oval bg_purple">
                                    <i class="mdi">date_range</i>
                                </div>

                                <h4 class="title"><?= __("Schedule Posts") ?></h4>
                                <p class="desc"><?= __("You don't need to worry about managment") ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" data-scroll="features">
            <div class="wrapper">
                <div class="text-c">
                    <h2 class="section-title"><?= __("Make the difference.") ?></h2>
                    <p class="section-desc"><?= __("Here are the features for you") ?></p>
                </div>

                <div class="features_list">
                    <div class="features_block">
                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle purple">
                                    <i class="mdi">burst_mode</i>
                                </div>

                                <h4 class="title"><?= __("Unique Design") ?></h4>
                            </div>
                        </div>

                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle red">
                                    <i class="mdi">lock</i>
                                </div>

                                <h4 class="title"><?= __("Secure Password hash") ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="features_block">
                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle blue">
                                    <i class="mdi">group</i>
                                </div>

                                <h4 class="title"><?= __("Multi Accounts") ?></h4>
                            </div>
                        </div>

                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle greenlight">
                                    <i class="mdi">phone_iphone</i>
                                </div>

                                <h4 class="title"><?= __("Mobile Responsive") ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="features_block">
                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle orange">
                                    <i class="mdi">add_box</i>
                                </div>

                                <h4 class="title"><?= __("Auto Post") ?></h4>
                            </div>
                        </div>

                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle aqua">
                                    <i class="mdi">credit_card</i>
                                </div>

                                <h4 class="title"><?= __("Payment Gateways") ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="features_block">
                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle green">
                                    <i class="mdi">date_range</i>
                                </div>

                                <h4 class="title"><?= __("Schedule Posts") ?></h4>
                            </div>
                        </div>

                        <div class="features">
                            <div class="flex flex-middle">
                                <div class="circle yellow">
                                    <i class="mdi">sentiment_satisfied</i>
                                </div>

                                <h4 class="title"><?= __("Emoji Compatibility") ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule">
            <div class="wrapper">
                <div class="clearfix">
                    <div class="thumbnail_gallery">
                        <div class="img_box inactive">
                            <div class="thumbnail">
                                <img src="<?= active_theme("uri") . "/assets/img/temp-img1.png"  ?>" alt="Scheduled post thumbnail - 1">
                            </div>

                            <div class="thumbnail">
                                <img src="<?= active_theme("uri") . "/assets/img/temp-img2.png"  ?>" alt="Scheduled post thumbnail - 2">
                            </div>
                            
                            <div class="thumbnail">
                                <img src="<?= active_theme("uri") . "/assets/img/temp-img3.png"  ?>" alt="Scheduled post thumbnail - 3">
                                <span class="badge"><?= __("Completed") ?></span>
                            </div>
                            
                            <div class="thumbnail">
                                <img src="<?= active_theme("uri") . "/assets/img/temp-img4.png"  ?>" alt="Scheduled post thumbnail - 4">
                                <span class="badge"><?= __("Completed") ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="info_box">
                        <div class="section-pretitle"><?= __("Instagram Scheduler") ?></div>
                        <h2 class="section-title"><?= __("Schedule your posts at a future date to save time") ?></h2>
                        <p class="section-desc"><?= __("There's no need to spend all day on your account when you can use a tool that automatically post on Instagram.") ?></p>
                    </div>
                </div>
            </div>
        </section>

        

        <?php include 'sections/pricing.php' ?>
    
        <section id="quote">
            <div class="wrapper">
                <div class="quote_text text-c">
                    <h2 class="section-title"><?= __("Don't worry about managing accounts.") ?></h2>
                    <p class="section-desc"><?= __("Real-time posting may be the best way to use it, but <br> not everyone has the time to update in real time") ?></p>

                    <div class="link_group">
                        <a href="#" class="white-button" data-scroll="pricing"><?= __("Get Now") ?></a>
                        <a href="<?= APPURL . "/login" ?>" class="purple-button"><?= __("Demo Version") ?></a>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'sections/footer.php'; ?>
    
        <script src="<?= active_theme("uri") . "/assets/js/core.js?v=" . VERSION ?>"></script>
        <script>
            $(function() {
                uranus.homesections();
            });
        </script>
    </body>
</html>