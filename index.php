<!DOCTYPE>

<html>

<head>
<link rel="stylesheet"	type="text/css" href="stylesheet.css">
</head>

<body>


<?php
include 'header.php';

?>

<table>


<?php 
include 'table.php';



foreach ($spectacle as $value) {
	echo '<tr>
			  <td class="lien">'.$value[heure].'</td>
			  <td class="lien">'.$value[spectacle].'</td>
			  <td class="lien">'.$value[artiste].'</td>
			  <td class="lien">'.$value[image].'</td>
		  </tr>';
}

?>

</table>

<?php

include 'footer.php';

?>



</body>
</html>