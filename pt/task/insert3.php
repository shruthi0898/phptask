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
						if(isset($_FILES['files'])){
    						$errors= array();
  							foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
   								$file_name = $key.$_FILES['files']['name'][$key];
    							$file_size =$_FILES['files']['size'][$key];
    							$file_tmp =$_FILES['files']['tmp_name'][$key];
    							$file_type=$_FILES['files']['type'][$key];  
        						if($file_size > 5242880){
      								$errors[]='File size must be less than 5 MB';
        						}   
        						$query="INSERT into upload(name,email,contact,`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$file_name','$file_size','$file_type'); ";
        						$desired_dir="user_data";
        						if(empty($errors)==true){
            						if(is_dir($desired_dir)==false){
                						mkdir("$desired_dir", 0700);    // Create directory if it does not exist
            						}
            						if(is_dir("$desired_dir/".$file_name)==false){
                						move_uploaded_file($file_tmp,"user_data/".$file_name);
            						}
            						else{                  //rename the file if another one exist
                						$new_dir="user_data/".$file_name.time();
                 						rename($file_tmp,$new_dir) ;       
            						}
            						mysql_query($query);      
        						}else{
                					print_r($errors);
        						}
    						}
  							if(empty($errors)){
    							echo "Success";
  							}
						}
						include("display.php");
						mysql_close($dbhandle);
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
