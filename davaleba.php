<?php
$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "http://livescore.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 
$fullcode = curl_exec($ch);
curl_close($ch);
preg_match ('/(<table class="league-table">.+?<\/table> ?)+/',$fullcode, $scores);
print "<center> $scores[0] </center>";
?>