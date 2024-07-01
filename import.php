<?php
include 'config.php';
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT into student (`name`, `school_name`, `address`, `contact_no`,`parents_name`) 
	            	values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query( $connect, $sql );
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"dashboard.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"dashboard.php\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($connect); 
				
		 	
			
		 }
	}	 
?>		 