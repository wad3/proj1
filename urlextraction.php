<?php
// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.php?action=add", $matches);
$host = $matches[1];

echo $host . '<br/>';
// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
?>