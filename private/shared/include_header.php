<?php $page_title= $page_title ?? "Universal GP Calculator"?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url_for("css/mine.css"); ?>"/>
     <link rel="stylesheet" media="all" href="<?php echo url_for("css/bootstrap.min.css"); ?>" />
    <title><?php echo $page_title ?></title>
</head>

<body> 


    <!-- The header stars here -->
    
    <!-- The header ends here -->


    <!-- The jumbo stars here -->
    <div class="jumbotron text-center">
	<div class="container">
		<h1>Online Result Checker(ORC). <span class="glyphicon glyphicon-thumbs-up"></span></h1>
		<h2><p class="">An Application  For Any University System!!.</p></h2>


	</div>
</div>
    <!-- The jumbo ends here -->
    <div class="container">
   <div class="row "> 
        <div class="col-md-4 col-lg-4 col-sm-4">
            <h4 class="text-info">Online Result Checker(ORC).</h4>
            <?php if($session->is_student_logged_in()){?>
            <h4><a href="<?php echo url_for('/profile.php'); ?>">
            (View Profile)</a></h4><?php } ?>
        </div>	
        <div class="col-md-1 col-lg-1 col-sm-1">
            <?php //echo display_session_message()?>
         </div>
         <div class="col-md-7 col-lg-7 col-sm-7">
         <?php if($session->is_student_logged_in()){ ?>
            <ul class="pagination">
              <li class="page-item mx-sm-2">
                 <h6 class="page-link"><?php echo $session->student_name ;?></h6>
              </li>
              <li class="page-item mx-sm-2">
                 <h6  class="page-link">Login_Time ->
                 <?php $time = $session->student_last_login ;?>
                 <?php echo date('h:i A' ,$time) ?? '' ;?></h6>
              </li>
              <li class="page-item mx-sm-2">
                 <a href="<?php echo url_for('/logout.php');?>" 
                 class="text-danger">Logout</a>
              </li>
         <?php }?>
         </div>

    </div>
    </div>
    <hr>
    