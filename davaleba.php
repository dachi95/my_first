<?php
$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "http://livescore.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 
$fullcode = curl_exec($ch);
curl_close($ch);
preg_match ('/(<table class="league-table">.+?<\/table> ?)+/',$fullcode, $scores);

preg_match ('/<td class="fh">[a-zA-Z0-9]+<\/td> ?/',$fullcode, $fclub);
preg_match ('/<td class="fa">[a-zA-Z0-9]+<\/td> ?/',$fullcode, $sclub);

//print "<center> $scores[0] </center>";
print_r ("$fclub . $sclub");
?>