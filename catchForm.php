<?php
$output = "";
print "Hello evan";
print "<table> \n";
print "<tr><td>key</td><td>value</td><tr>\n";
foreach($_POST as $name => $value){
	if(is_array($_POST["fruits"])){
		print "fruits yes";
	}
	if(is_array($name)){
		print "yes";

	}else{
		print "no";
		print "<tr><td>" . $name . "</td><td>" . $value . "</td></tr> \n";
		$output .= $name . " " . $value . "\r\n";
	}
	if(!empty($_POST['fruit'])) {
    foreach($_POST['fruits'] as $check) {
            echo $check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.ou
			$output .= $check . "; ";
    }
	
}

	print $output;
	$fh = fopen("output.txt", "a");
	fwrite($fh, $output);
	fclose($fh);
}

print "</table>";
?>
<a href='index.php'>click back to form</a>