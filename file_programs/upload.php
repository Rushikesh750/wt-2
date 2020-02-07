<?php 
	$file_dir="C:\\wamp\\www\\Rushi\\file_programs\\upload\\";
	if(move_uploaded_file($_FILES['fileupload']['tmp_name'],$file_dir.$_FILES['fileupload']['name']))
	{
		echo "File is uploaded successfully";
	}
	else
	{
		echo "File is not uploaded";
	}
 ?>