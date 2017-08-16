<?php
$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$supportedLocales = ["en_US", "es_MX"];

// set default in case of operator error
if(in_array($locale, $supportedLocales) === false) {
	$locale = "en_US";
}

putenv("LANG=$locale");
setlocale(LC_ALL, $locale);

bindtextdomain("gettext-talk", "locale");
bind_textdomain_codeset("gettext-talk", "UTF-8");
