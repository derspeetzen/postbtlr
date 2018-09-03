<?php 
namespace Themes\Uranus;

// Disable direct access
if (!defined('APP_VERSION')) {
    die("You're not authorized to view this page."); 
}

/**
 * Index Controller
 */
class IndexController extends \Controller
{
    /**
     * Process
     */
    public function process()
    {
        $AuthUser = $this->getVariable("AuthUser");
        $Route = $this->getVariable("Route");

        if ($AuthUser && isset($Route->params->lang)) {
            // Update user's language
            foreach (\Config::get("applangs") as $lang) {
                if ($Route->params->lang == $lang["code"] || 
                    $Route->params->lang == $lang["shortcode"] ) 
                {
                    $AuthUser->set("preferences.language", $lang["code"])
                             ->save();
                    header("Location: ".APPURL);
                    exit;
                }
            }
        }

        // Get packages
        $Packages = \Controller::model("Packages");
        $Packages->where("is_public", "=", 1)
                 ->orderBy("id","ASC")
                 ->fetchData();

        // Get active modules to be displayed in pricing table
        $Plugins = \Controller::model("Plugins");
        $Plugins->where("is_active", 1)
                ->whereIn("idname", [
                    "auto-follow", "auto-unfollow", "auto-like",
                    "auto-comment", "welcomedm", "auto-repost"
                ])->fetchData();

        // Set variables
        $this->setVariable("TrialPackage", \Controller::model("GeneralData", "free-trial"))
             ->setVariable("Settings", \Controller::model("GeneralData", "settings"))
             ->setVariable("Plugins", $Plugins)
             ->setVariable("Packages", $Packages);

        $this->view(THEMES_PATH . "/" . IDNAME . "/views/index.php", null);
    }
}

