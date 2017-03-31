<?php
	define("TITLE", "Task");
	$my_name	= "Shri Shruthi";
	
	if (isset ($_GET['ref'])) {
		$ref = $_GET['ref'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
    	<script src="https://use.fontawesome.com/7fe139a1a7.js"></script>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/main.css">
    	<link rel="stylesheet" href="css/animate.css">

		<script type="text/javascript">SyntaxHighlighter.all();</script>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script> 
	
	</head>
	
	<body>
		<div class="wrapper">
			<header>
				<?php include('includes/header.php'); ?>
			</header>
			
			
			<h1><small><?php echo TITLE; ?></small></h1>
			
			<img src="../assets/img/hr.png" alt="PHP">
			<br>
			<br>
			
			<div class="sandbox">	

				<section>
        			<div id="form">
                		<form action="insert3.php" method="post">
                    		<div class="form-group col-lg-12">
                        		<label for="inputName">Name</label>
    							<input type="text" name="name"  class="form-control" placeholder="Name"></td></tr>
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputEmail">Email</label>
                        		<input type="email" name="email" class="form-control" placeholder="Email">
                    		</div>
                    		<div class="form-group col-lg-12">
                        		<label for="inputPhoneNumber">Phone number</label>
                        		<input type="text" name="contact" class="form-control" placeholder="9999999999" minlength="10" maxlength="10">
                    		</div>
                    		<div class="form-group col-lg-12">
                       			<input type="file" name="files[]" multiple="" />
                    		</div>
                       	<center><button type="submit" id="s" class="btn btn-primary">SUBMIT</button></center>
                       	</form>  
        			</div>
    			</section>

			</div><!-- end sandbox -->

			<br>
			<br>
			<img src="../assets/img/hr.png" alt="PHP">
			<br>
			<br>

			<footer>
				<?php include('includes/footer.php'); ?>
			</footer>
			
		</div><!-- end wrapper -->
		
	</body>
</html>
