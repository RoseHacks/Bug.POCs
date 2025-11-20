// Server file for handling incoming blind XSS requests.

<?php

$logFile = 'bxss_log.txt';

$timestamp = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$uri = $_SERVER['REQUEST_URI'];
$queryString = $_SERVER['QUERY_STRING'];
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A';

$log = "[$timestamp] IP: $ip | UA: $userAgent | URI: $uri | REF: $referrer | QUERY: $queryString\n";

file_put_contents($logFile, $log, FILE_APPEND);

// Optional response
echo "Logged.";
?>
