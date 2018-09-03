<?php 
    namespace Themes\Uranus;

    // Disable direct access
    if (!defined('APP_VERSION')) {
        die("You're not authorized to view this page."); 
    }
?>
<footer>
    <div class="wrapper">
        <div class="clearfix">
            <div class="brand_logo clearfix">
                <a href="<?= APPURL ?>">
                    <img src="<?= site_settings("logotype") ? site_settings("logotype") : THEMES_URL . "/" . IDNAME . "/assets/img/logo.svg" ?>" 
                         alt="<?= site_settings("site_name") ?>">
                </a>

                <p> &copy; <?= __("Copyright %s.", date("Y")) ?> <?= __("All rights reserved.") ?></p>
            </div>

            <div class="links">
                <ul>
                    <li>
                        <a href="<?= APPURL . "/privacy" ?>"><?= __("Privacy Policy") ?></a>
                    </li>

                    <li>
                        <a href="<?= APPURL . "/terms" ?>"><?= __("Terms of Services") ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>