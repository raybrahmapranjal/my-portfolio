<?php 
$password ="1234"; //input password to convert to hash
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
echo $hash = hash('sha512', $password . $salt);
?>