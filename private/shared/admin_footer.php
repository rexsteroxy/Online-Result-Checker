<footer class="foot text-center">
    <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5><a href="contact.php" style ="color: white">Contact us</a></h5>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
                <h5><a href="about.php" style ="color: white">About us</a></h5>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
                <h5><a href="signup.php" style ="color: white">Register </a></h5>
				</div>
			</div>		
        </div>
        
        <h5> 
            Powered by
             Rexsteroxy -- @copyright
            <?php echo date('Y'); ?>
        </h5>
	</section>
    </footer>
	<!-- ./Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
<?php 
db_disconnect($database);
?>