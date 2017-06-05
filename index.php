<!doctype html>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gogo.css">
	<title></title>
</head>
<body>
<h1>
<?php
$morning = "6";
$hour = date("H");
$minutes = date("i");

if ($hour < "12") {
    echo '<div class="morgen">' . '<div class="morgentekst">' . nl2br ("Goede morgen!\nhet is nu ") . date("H:")  . date("i") .'</div>' .'</div>';

}

elseif($hour <"18"){
	 echo '<div class="middag">' . '<div class="middagtekst">' . nl2br ("Goeden middag!\nhet is nu ") . date("H:")  . date("i") .'</div>' .'</div>';

}

elseif($hour <"24"){
	 echo '<div class="avond">' . '<div class="avondtekst">' . nl2br ("Goeden avond!\nhet is nu ") . date("H:")  . date("i") .'</div>' .'</div>';

}
else{
	echo '<div class="nacht">' . '<div class="nachttekst">' . nl2br ("Goede nacht!\nhet is nu "). date("H:")  . date("i") .'</div>' .'</div>';


}

?>
</h1>
</body>
</html>