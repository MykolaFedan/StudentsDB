<?php
	include 'config.php';

	$connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
	    if (!$connect) exit ('MySQL Error!');
	    
	      mysqli_set_charset($connect ,"utf8");

	  
			$qwery2=mysqli_query($connect, "SELECT value, id FROM shop_feature_values_varchar WHERE feature_id = 15 AND value = '5x120' " );

	            while ($row=mysqli_fetch_assoc($qwery2)) {
	                                    
				  		 echo " <p>$row[value]</p>";
					}

	                           
	                                

	                          

	                             mysqli_close($connect); 

                               


?>
