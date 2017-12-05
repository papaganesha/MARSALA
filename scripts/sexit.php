<?php
$redirect = '<meta http-equiv="refresh" content="1; url=../Index.php" />';
session_start();
session_destroy();
echo $redirect;
?>