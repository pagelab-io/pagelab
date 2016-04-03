<?php

// Init vars.
$REPO_PATH = "/var/www/pagelab.io";

//echo "<pre>";

//echo shell_exec("cd ~/ && pwd 2>&1");

// Pull files from repo
$output = shell_exec("cd /var/www/pagelab.io && git pull 2>&1");

// Log changes
file_put_contents("/var/www/logs/pagelab.log", '/////////////////////////////' . PHP_EOL . $output, FILE_APPEND);

// END
die("<br>$output </pre>" . mktime());
