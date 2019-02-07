<?php 
if (!isset($page_title)){$page_title="admin_homepage";}
?>

<!doctype html>

<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ORC- <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url_for("css/mine.css"); ?>"/>
     <link rel="stylesheet" media="all" href="<?php echo url_for("css/bootstrap.min.css"); ?>" />
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
<div class="container-fluid">
		<div class="row "> 
     <?php if($session->is_admin_logged_in()){ ?>
		<div class="col-md-6 col-lg-6 col-sm-6">
           <ul class="pagination">
             <li class="page-item mx-sm-2">
                <a href="<?php echo url_for('/admin/index.php'); ?>" 
                class="page-link btn btn-outline-danger text-dark">Menu</a>
             </li>
             <li class="page-item mx-sm-2">
                <h6 class="page-link"><?php echo $session->admin_name ;?></h6>
             </li>
             <li class="page-item mx-sm-2">
                <h6  class="page-link">Login_Time ->
                <?php $time = $session->admin_last_login ;?>
                <?php echo date('h:i A' ,$time) ?? '' ;?></h6>
             </li>
             <li class="page-item mx-sm-2">
                <a href="<?php echo url_for('/admin/admin_logout.php');?>" 
                class="text-danger">Logout</a>
             </li>
             <?php } ?>

           </ul>
           </div>
           
        </div>
		</div>
	</div>
    

    <?php echo display_session_message();?>
