<?php 
	if(file_exists("C:\wamp\www\Rushi\abc.txt"))
	{
		echo "File is exists";
	}
	if(is_file("C:\wamp\www\Rushi\abc.txt"))
	{
		echo "<br>abc.txt is a file";
	}
	if(is_dir("C:\wamp"))
	{
		echo "<br>It is a directory";
	}
	if(is_readable("C:\wamp\www\Rushi\abc.txt"))
	{
		echo "<br>File is readable";
	}
	if(is_writable("C:\wamp\www\Rushi\abc.txt"))
	{
		echo "<br>File is writable";
	}
	if(is_executable("C:\wamp\www\Rushi\abc.txt"))
	{
		echo "<br>File is executable";
	}
	echo "<br>Size of the file is ".filesize("C:\wamp\www\Rushi\abc.txt");
	$lastaccess=fileatime("C:\wamp\www\Rushi\abc.txt");
	echo "<br>File is last accessed on ".date("l... d M Y... g:i A",$lastaccess);
	$lastmod=filemtime("C:\wamp\www\Rushi\abc.txt");
	echo "<br>File is modified last ".date("l... d M Y... g:i A",$lastmod);
	$created=filectime("C:\wamp\www\Rushi\abc.txt");
	echo "<br>File created on ".date("l... d M Y... g:i A",$lastmod);
 ?>