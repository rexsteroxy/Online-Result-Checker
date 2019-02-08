<?php
require_once('../../private/initialize.php');

 $session->admin_logout();

redirect_to(url_for('/admin/admin_login.php'));

?>
