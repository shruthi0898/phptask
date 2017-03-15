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
						$username = "root";
						$password = "";
						$hostname = "localhost"; 
						//connection to the database
						$dbhandle = mysql_connect($hostname, $username);
						if (!$dbhandle)
						{
							die('Could not connect: ' . mysql_error());
						}
						mysql_select_db("shri_task", $dbhandle);
						$sql="INSERT INTO registration (name, email,contact)
						VALUES
						('$_POST[name]','$_POST[email]','$_POST[contact]')";
						if (!mysql_query($sql,$dbhandle))
						{
							die('Error: ' . mysql_error());
						}
						$query="SELECT * FROM registration";
						$result=mysql_query($query);
						mysql_close($dbhandle);
					?>
					<table border="2">
						<tr>
							<th>SNO</th>
							<th> NAME </th>
							<th>EMAIL</th>
							<th>PHONE NO</th>
						</tr>
						<?php
							while($array= mysql_fetch_row($result))
							{
								print "<tr>
								<td> $array[0] </td>
								<td> $array[1] </td>
								<td> $array[2] </td>
								<td> $array[3] </td> </tr>";
							}
						?>
					</table>

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
