<?php
 
session_start();
 
ob_start();
 
session_destroy();
 
echo "";
 
header("Refresh: 2; url=index.php");
 
?>