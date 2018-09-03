<?php 
    namespace Themes\Uranus;

    // Disable direct access
    if (!defined('APP_VERSION')) {
        die("You're not authorized to view this page."); 
    }
?>
<section id="pricing" data-scroll="pricing">
    <div class="wrapper">
        <div class="text-c">
            <h2 class="section-title"><?= __("Pricing") ?></h2>
            <p class="section-desc"><?= __("Pricing designed to fit your business") ?></p>
        </div>
        
        <?php 
            $currency = $Settings->get("data.currency");
            $iszdc = isZeroDecimalCurrency($currency);

            $show_modules = false;

            $available_modules = [];
            foreach ($Plugins->getDataAs("Plugin") as $p) {
                $available_modules[] = $p->get("idname");
            }

            foreach ($Packages->getDataAs("Package") as $p) {
                $package_modules = $p->get("settings.modules");
                if ($package_modules &&
                    is_array($package_modules) &&
                    array_intersect($package_modules, $available_modules)) 
                {
                    $show_modules = true;
                    break;
                }
            }
        ?>

        <div class="price_list flex flex-center flex-wrap">
            <?php foreach ($Packages->getDataAs("Package") as $index => $p): ?>
                <?php 
                    $is_popular = $index == 1 ? true :  false;

                    if ($p->get("annual_price") > 0) {
                        $annual = $p->get("annual_price");
                    } else {
                        $annual = 12 * $p->get("monthly_price");
                    }

                    if ($iszdc) {
                        $total = 12 * round($p->get("monthly_price"));
                        $annual_save = $total - round($annual);
                    } else {
                        $total = 12 * $p->get("monthly_price");
                        $annual_save = $total - $annual; 
                    }
                ?>

                <div class="package <?= $is_popular ? "popular" : "" ?>">
                    <?php if ($is_popular): ?>
                        <span class="badge"><?= __("Most Popular") ?></span>
                    <?php endif ?>

                    <h3 class="package-title"><?= htmlchars($p->get("title")) ?></h3>
                    <p class="annual-save">
                        <?php if ($annual_save > 0): ?>
                            <?php if (strtolower($currency) == "usd"): ?>
                                <?= __("Save %s when paid annualy", "$" . format_price($annual_save, $iszdc)) ?>
                            <?php else: ?>
                                <?= __("Save %s when paid annualy", format_price($annual_save, $iszdc) ." ".htmlchars($currency)) ?>
                            <?php endif ?>
                        <?php endif ?>
                    </p>

                    <div class="price">
                        <?= (strtolower($currency) == "usd" ? "$" : "") . format_price($p->get("monthly_price"), $iszdc) ?>
                        <span>/ <?= strtolower($currency) != "usd" ? htmlchars($currency)." " : "" ?><?= __("mon") // month short ?></span>
                    </div>

                    <div class="account-count">
                        <?php 
                            $max = (int)$p->get("settings.max_accounts");
                            if ($max > 0) {
                                echo n__("Only 1 account", "Up to %s accounts", $max, $max);
                            } else if ($max == "-1") {
                                echo __("Unlimited accounts");
                            } else {
                                echo __("Zero accounts");
                            }
                        ?>
                    </div>

                    <ul class="feature">
                        <li class="title"><?= __("Post Types") ?>:</li>
                        <li>
                            <?php if ($p->get("settings.post_types.timeline_photo")): ?>
                                <?= __("Photo") ?>,
                            <?php else: ?>
                                <del><?= __("Photo") ?></del>,
                            <?php endif ?>

                            <?php if ($p->get("settings.post_types.timeline_video")): ?>
                                <?= __("Video") ?>
                            <?php else: ?>
                                <del><?= __("Video") ?></del>
                            <?php endif ?>
                        </li>

                        <li>
                            <?php 
                                $story_photo = $p->get("settings.post_types.story_photo");
                                $story_video = $p->get("settings.post_types.story_video");
                            ?>
                            <?php if ($story_photo && $story_video): ?>
                                <?= __("Story")." (".__("Photo+Video").")" ?>,
                            <?php elseif ($story_photo): ?>
                                <?= __("Story")." (".__("Photo only").")" ?>,
                            <?php elseif ($story_video): ?>
                                <?= __("Story")." (".__("Video only").")" ?>,
                            <?php else: ?>
                                <del><?= __("Story")." (".__("Photo+Video").")" ?></del>,
                            <?php endif ?>
                        </li>

                        <li>
                            <?php 
                                $album_photo = $p->get("settings.post_types.album_photo");
                                $album_video = $p->get("settings.post_types.album_video");
                            ?>
                            <?php if ($album_photo && $album_video): ?>
                                <?= __("Album")." (".__("Photo+Video").")" ?>
                            <?php elseif ($album_photo): ?>
                                <?= __("Album")." (".__("Photo only").")" ?>
                            <?php elseif ($album_video): ?>
                                <?= __("Album")." (".__("Video only").")" ?>
                            <?php else: ?>
                                <del><?= __("Album")." (".__("Photo+Video").")" ?></del>
                            <?php endif ?>
                        </li>
                    </ul>

                    <ul class="feature">
                        <li class="title"><?= __("Cloud Import") ?>:</li>
                        <li>
                            <?php $none = true; ?>
                            <?php if ($p->get("settings.file_pickers.google_drive")): ?>
                                <?php $none = false; ?>
                                <span class="icon fab fa-google-drive" title="Google Drive"></span>
                            <?php endif ?>

                            <?php if ($p->get("settings.file_pickers.dropbox")): ?>
                                <?php $none = false; ?>
                                <span class="icon fab fa-dropbox" title="Dropbox"></span>
                            <?php endif ?>

                            <?php if ($p->get("settings.file_pickers.onedrive")): ?>
                                <?php $none = false; ?>
                                <span class="icon fas fa-cloud" title="OneDrive"></span>
                            <?php endif ?>

                            <?php if ($none): ?>
                                <?= __("Not available") ?>
                            <?php endif ?>
                        </li>
                    </ul>

                    <?php if ($show_modules): ?>
                        <ul class="feature">
                            <li class="title"><?= __("Modules") ?>:</li>
                            <li class="clearfix flex flex-grow flex-wrap flex-middle flex-center">
                                <?php $package_modules = $p->get("settings.modules") ?>
                                <?php foreach ($Plugins->getDataAs("Plugin") as $m): ?>
                                    <?php 
                                        $idname = $m->get("idname");

                                        $config_path = PLUGINS_PATH . "/" . $idname . "/config.php"; 
                                        if (!file_exists($config_path)) {
                                            continue;
                                        }
                                        $config = include $config_path;
                                        $name = empty($config["plugin_name"]) ? $idname : $config["plugin_name"];
                                    ?>
                                    <span class="module tooltip tippy <?= in_array($m->get("idname"), $package_modules) ? "" : "disabled" ?>"
                                          style="<?= empty($config["icon_style"]) ? "" : $config["icon_style"] ?>"
                                          title="<?= htmlchars($name) ?>"
                                          data-size="small">
                                            
                                        <?php if (in_array($m->get("idname"), ["auto-follow", "auto-unfollow"])): ?>
                                            <?php 
                                                $name = empty($config["plugin_name"]) ? $idname : $config["plugin_name"];
                                                echo textInitials($name, 2);
                                            ?>
                                        <?php elseif($m->get("idname") == "auto-like") : ?>
                                            <span class="fas fa-heart"></span>
                                        <?php elseif($m->get("idname") == "auto-comment") : ?>
                                            <span class="fas fa-comment-alt"></span>
                                        <?php elseif($m->get("idname") == "welcomedm") : ?>
                                            <span class="sli sli-paper-plane"></span>
                                        <?php elseif($m->get("idname") == "auto-repost") : ?>
                                            <span class="sli sli-reload"></span>
                                        <?php endif ?>
                                    </span>
                                <?php endforeach ?>
                            </li>
                        </ul>
                    <?php endif ?>

                    

                    <ul class="feature">
                        <li class="title"><?= __("Storage") ?></li>
                        <li>
                            <?php if ($p->get("settings.storage.total") == "-1"): ?>
                                <?= __("Unlimited") ?>
                            <?php else: ?>
                                <?= readableFileSize($p->get("settings.storage.total") * 1024 * 1024) ?>
                            <?php endif ?>
                        </li>
                    </ul>

                    <a class="purple-button" href="<?= APPURL."/".($AuthUser ? "renew" : "signup")."?package=".$p->get("id") ?>"><?= __("Get started") ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>