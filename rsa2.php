<?php 

echo $hex = hex2bin("6578616d706c65206865782064617461");
	echo"<br/>";
echo "=============================================";
	echo"<br/>";
	

echo $hex = bin2hex("example hex data");


function exponent($chr,$e,$n){
	
	$chr_exponent=pow($chr,$e);
	echo $chr_exponent % $n;

}


	echo"<br/>";
echo "=============================================";
	echo"<br/>";
	

echo $c= 42%10 ;
?>