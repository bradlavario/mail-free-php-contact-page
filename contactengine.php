<?php


$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
$Date = date('l jS \of F Y h:i:s A');



// prepare text to write

$Body = "";
$Body .= $Date;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= " ";
$Body .= "\n";

// write text to file (this will write to a file in the main directory where the contact.php is found)

$myFile = "datafile.txt";  //change this to whatever you would like, it holds the data
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $Body;
fwrite($fh, $stringData);
fclose($fh);



// redirect to main page (change this to index.html or index.php if not testing this by itself)

print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.php\">";

?>
