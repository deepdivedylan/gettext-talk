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
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php _("A Site About WAT"); ?></title>
	</head>
	<body>
		<h1><?php _("WAT"); ?></h1>
		<p><?php _("WAT is the result of {} + {} or [] + []. You can't do that! WAT!?"); ?></p>
	</body>
</html>
