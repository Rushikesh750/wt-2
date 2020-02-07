<?php
$file_dir="C:\\upload\\";
//echo "$_FILES";
if (move_uploaded_file($FILES['fileupload']['tmp_name'], $file_dir.$FILES['fileupload']['name']))
{
	echo "file has been uploaded successfully";
}
    else {
        echo "Sorry, there was an error uploading your file.";
    }

?>

