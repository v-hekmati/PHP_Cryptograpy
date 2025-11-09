<?php 
$msg="HELLO1";
$ops=preg_split("//",$msg, -1, PREG_SPLIT_NO_EMPTY);
print_r($ops);


	echo"<br/>";
echo "=============================================";
	echo"<br/>";
	
	echo $x=decbin(ord("h"));
		
		echo"<br/>";
	
	 $x2=bindec($x);
	 echo chr($x2);
	
	
	echo"<br/>";
echo "=============================================";
	echo"<br/>";
	
/*	function text2bin($string) {
        
		for($i=0; $i<strlen($string); $i++) {
			if( ($c = ord($string{$i})) != 0) $bin .= decbin($c);
			if( $i != (strlen($string) -1) )  $bin .= ":";
		}   
    	return $bin;
	}
	text2bin("1");*/

// make 8 bit binary 
$bin = decbin(49);
echo $bin = substr("00000000",0,8 - strlen($bin)) . $bin;


	echo"<br/>";
echo "=============================================";
	echo"<br/>";



//==== GCD function 
function gcd($x, $y)
{

          $x = abs($x);

          $y = abs($y);

          if($x + $y == 0)
          {

                    return "0";

          }
          else
          {

                    while($x > 0)
                    {

                              $z = $x;

                              $x = $y % $x;

                              $y = $z;

                    }

                    return $z;

          }

}


echo $gcd = gcd("7", "11");



?>