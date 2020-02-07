<?php
$roll = $_POST['roll'];
$name = $_POST['name'];
$fname="information.txt";
$fp = fopen($fname,"a") or die("could not open file");
fputs($fp,$roll);
fputs($fp,"\t");
fputs($fp,$name);
fputs($fp,"\n");
echo "<h1> added to file successfully</h1><br>";
echo "<a href=\"http://localhost/Rushi/file_programs/form.php\">Go Back</a>";

fclose($fp);

rename('information.txt', 'account/information.txt');

?>