<?php
 require_once("../private/initialize.php");

 $session->student_logout();

redirect_to(url_for('login.php'));

?>
