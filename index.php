<?php
$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$supportedLocales = ["en_US.utf8", "es_MX.utf8"];

// set default in case of operator error
if(in_array($locale, $supportedLocales) === false) {
	$locale = "en_US.utf8";
}

putenv("LANG=$locale");
setlocale(LC_ALL, $locale);

$domain = "gettext-talk";
bindtextdomain($domain, __DIR__ . "/locale");
bind_textdomain_codeset($domain, "UTF-8");
textdomain($domain);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?php echo _("A Site About WAT"); ?></title>
	</head>
	<body>
		<h1><?php echo _("WAT"); ?></h1>
		<p><?php echo _("WAT is the result of {} + {} or [] + []. You can't do that! WAT!?"); ?></p>
	</body>
</html>
