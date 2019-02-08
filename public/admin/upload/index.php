<?php 
//redirecting to the stageone page
require_once('../../../private/initialize.php');
require_admin_login();
header('location:' . 'stageone.php');

?>