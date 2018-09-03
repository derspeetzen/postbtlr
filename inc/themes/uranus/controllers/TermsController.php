<?php 
namespace Themes\Uranus;

// Disable direct access
if (!defined('APP_VERSION')) {
    die("You're not authorized to view this page."); 
}

/**
 * Terms Controller
 */
class TermsController extends \Controller
{
    /**
     * Process
     */
    public function process()
    {
        $this->view(THEMES_PATH . "/" . IDNAME . "/views/terms.php", null);
    }
}

