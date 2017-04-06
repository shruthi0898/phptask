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

        $query="INSERT into upload (name,email,contact,`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$file_name','$file_size','$file_type'); ";
        $desired_dir="user_data";
        $desired_dir="user_data";
if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);  }   
        
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"user_data/".$file_name);
            }else{                  //rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;       
            }
            mysql_query($query);      
        }
      }

include("display.php");
mysql_close($dbhandle);
?>


