<?php
	
	class database
	{
		
		function connection()
		{
			return mysqli_connect('suryadb.mysql.database.azure.com','SuryaAdmin','Gundam@2017','hrm_db');
		}
	}

?>