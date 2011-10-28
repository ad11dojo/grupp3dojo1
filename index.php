<html>
<head><meta charset="UTF-8"><title>AD11 grupp3dojo1</title></head>
<body>
<?php

// detta är vår kända input & vad vi vill få ut:
$test_input = "**.|…|…";
$test_output = "bb1|221|000";
$input = "xxx|x*x|xxx";

// skriv en funktion som tar in en input-sträng & returnerar en output-sträng
$output = ms( $input );

function ms( $stjärna )//Spela ms
{
	$a = explode ( "|" , $stjärna );
	print_r ($a);
	echo "<br />";

	$ms = array( str_split($a[0]), str_split($a[1]), str_split($a[2]));

	print_r ($ms);

	echo "<br />";
	
	return "$stjärna";
}

// testa om det funkar?
if( $test_output == ms( $test_input ) )
{
	echo "bra!";
}
else
{
	echo "öva mer!";
}


?>
</body>
</html>