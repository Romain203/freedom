<?php
$titre = "login";
ob_start(); 
?>  

<?php 
$content = ob_get_clean();
require "Layout.php";
?>