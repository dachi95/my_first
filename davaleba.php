<?php
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL , 'http://WWW.livescore.com' );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER , TRUE);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION , TRUE);
  $table=''
  $output = curl_exec($ch);
preg_match( $output, $table );

print $output;

curl_close($ch);



?>