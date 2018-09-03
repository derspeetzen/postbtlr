<?php 
require_once APPPATH.'/config/common.config.php'; // Common configuration
require_once APPPATH.'/config/db.config.php'; // Database configuration
require_once APPPATH.'/config/i18n.config.php'; // i18n configuration

// ASCII Secure random crypto key
define("CRYPTO_KEY", "def00000df77934da147d679a6de6bdf2bba9d3bbe18cf31f3ae100166df39fa0ee211768eef29c5cccacedb9d19472263bdd9ac9b78669343b4944edecb6d5ea0cbc542");

// General purpose salt
define("NP_SALT", "XxzJWbCYWwWimp6O");


// Path to instagram sessions directory
define("SESSIONS_PATH", APPPATH . "/sessions");
// Path to temporary files directory
define("TEMP_PATH", ROOTPATH . "/assets/uploads/temp");


// Path to themes directory
define("THEMES_PATH", ROOTPATH . "/inc/themes");
// URI of themes directory
define("THEMES_URL", APPURL . "/inc/themes");


// Path to plugins directory
define("PLUGINS_PATH", ROOTPATH . "/inc/plugins");
// URI of plugins directory
define("PLUGINS_URL", APPURL . "/inc/plugins");

// Path to ffmpeg binary executable
// NULL means it's been installed on global path
// If you set the value other than null, then it will only be 
// validated during posting the videos
define("FFMPEGBIN", ROOTPATH . "/ffmpeg/ffmpeg");

// Path to ffprobe binary executable
// NULL means it's been installed on global path
// If you set the value other than null, then it will only be 
// validated during posting the videos
define("FFPROBEBIN", ROOTPATH . "//ffmpeg/ffprobe");
