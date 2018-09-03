<?php
$langs = [];


// German
$langs[] = [
    "code" => "de-DE",
    "shortcode" => "de",
    "name" => "Deutsch",
    "localname" => "Deutsch"
];

// US English
$langs[] = [
    "code" => "en-US",
    "shortcode" => "en",
    "name" => "English",
    "localname" => "English"
];


Config::set("applangs", $langs);
Config::set("default_applang", "de-DE");
