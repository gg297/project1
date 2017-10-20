
<?php
echo "<html><body><table border = 1>\n\n";//program for html table
$f = fopen('uploads/'.$_GET['filename'], "r");//open the specified file
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
        //loop for displaying content of csv file into html 
}
fclose($f);
echo "\n</table></body></html>";
?>