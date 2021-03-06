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

					<?php
						$con = mysql_connect('localhost', 'root'); 
						if (!$con) { die('Could not connect: ' . mysql_error()); } 
						mysql_select_db("shri_task", $con); 
						$result = mysql_query("SELECT * FROM upload"); 
						echo "<table border='1' width='50%' >"; 
						echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th><th>File</th></tr>" ;
				    	while($row = mysql_fetch_array($result)) { 
				        	echo "<tr>";
				        	echo "<td>".$row[0]."</td>";
				        	echo "<td>".$row[1]."</td>";
				        	echo "<td>".$row[2]."</td>";
				        	echo "<td>".$row[3]."</td>";
				        	echo "<td>".$row[4]."</td>";
				        
				    		echo "</tr>"; 
				    	}
						echo "</table>";
						mysql_close($con);
					?>


					
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
