<?php

class Procter
{
//put file or directory here
public static function autoload($class)
{
include upload . '.php';
}
}
 
 class uploadform
 //class to upload csv file
 {
 public function upload()
 {
 
 echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
 echo 'Select CSV to upload:';
 echo '<br>';
 echo '<br>';
 echo '<input type="file" name="csvfile" id="fileToUpload">';
 echo '<input type="submit" value="Upload CSV" name="submit">';
 echo '</form>';
 }
 }
 
 $obj= new uploadform();
 $obj-> upload();
?>
