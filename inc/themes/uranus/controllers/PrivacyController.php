<?php 
namespace Themes\Uranus;

// Disable direct access
if (!defined('APP_VERSION')) {
    die("You're not authorized to view this page."); 
}

/**
 * Privacy Controller
 */
class PrivacyController extends \Controller
{
    /**
     * Process
     */
    public function process()
    {
        $this->view(THEMES_PATH . "/" . IDNAME . "/views/privacy.php", null);
    }
}

