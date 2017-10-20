<?php

$info = pathinfo($_FILES['csvfile']['name']); //path of file to be uploaded
$ext = $info['extension']; // get the extension of the file
$newname = $_FILES['csvfile']['name']; 

$target = 'uploads/'.$newname; //dirctory where file is saved
move_uploaded_file( $_FILES['csvfile']['tmp_name'], $target);


/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: csvtohtml.php?filename='.$newname);
exit;
?>



