<html>
 <head>
  <title>Ice cream test </title>
 </head>
 <body>
 <?php 
 echo "<h2>ice cream is awesome!</h2>";
 echo "Hi there<br>";
 ?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
date_default_timezone_set("America/New_York");
echo "Todays date is " . date("m/d/y") . "<br>\n";
echo "Today is " . date("l") . "<br>\n";

echo(date("H") . " " . date("A") . "<br>\n");

?>

</body>
</html>