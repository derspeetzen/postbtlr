<?php 
    namespace Themes\Uranus;

    // Disable direct access
    if (!defined('APP_VERSION')) {
        die("You're not authorized to view this page."); 
    }
?>
<header>
    <div class="wrapper">
        <div class="flex flex-start flex-middle">
            <div class="brand-logo flex-align-left">
                <a href="<?= APPURL ?>">
                    <img src="<?= site_settings("logotype") ? site_settings("logotype") : THEMES_URL . "/" . IDNAME . "/assets/img/logo.svg" ?>" 
                         alt="<?= site_settings("site_name") ?>">
                </a>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="<?= APPURL . "/#manage" ?>" data-scroll="about"><?= __("ABOUT") ?></a>
                    </li>

                    <li>
                        <a href="<?= APPURL . "/#features" ?>" data-scroll="features"><?= __("FEATURES") ?></a>
                    </li>
                    
                    <li>
                        <a href="<?= APPURL . "/#pricing" ?>" data-scroll="pricing"><?= __("PRICES") ?></a>
                    </li>

                    <?php if ($AuthUser): ?>
                        <li class="active">
                            <a href="<?= APPURL . "/post" ?>"><?= __("Go to Account") ?></a>        
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?= APPURL . "/login" ?>"><?= __("LOGIN") ?></a>
                        </li>
                        <li>
                            <a href="<?= APPURL . "/signup" ?>"><?= __("SIGN UP") ?></a>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>

            <div class="language js-dropdown js-dropdown-click">
                <span class="active">
                    <?= strtoupper(active_lang("shortcode")) ?>
                    <i class="mdi">arrow_drop_down</i>
                </span>

                <div class="dropdown-list">
                    <ul class="language-list">
                        <?php foreach (\Config::get("applangs") as $lang): ?>
                            <li>
                                <a href="<?= APPURL . "/" . $lang["code"] ?>"><?= strtoupper($lang["shortcode"]) ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>