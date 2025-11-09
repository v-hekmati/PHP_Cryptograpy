<?php 

$p=17;
$q=11;

$n=$p*$q;

$e=7; // must less than $fi_n and gcd ($e,$fi_n)==1;
$d=23; // must 

$msg="88h";
//===========================

$position= array("a"=>"1","b"=>"2","c"=>"3","d"=>"4","e"=>"5","f"=>"6","g"=>"7","h"=>"8","i"=>"9","j"=>"10","k"=>"11","l"=>"12","m"=>"13","n"=>"14","o"=>"15","p"=>"16","q"=>"17","r"=>"18","s"=>"19","t"=>"20","u"=>"21","v"=>"22","w"=>"23","x"=>"24","y"=>"25","z"=>"26",
				"A"=>"27","B"=>"28","C"=>"29","D"=>"30","E"=>"31","F"=>"32","G"=>"33","H"=>"34","I"=>"35","J"=>"36","K"=>"37","L"=>"38","M"=>"39","N"=>"40","O"=>"41","P"=>"42","Q"=>"43","R"=>"44","S"=>"45","T"=>"46","U"=>"47","V"=>"48","W"=>"49","X"=>"50","Y"=>"51","Z"=>"52",
				"1"=>"53","2"=>"54","3"=>"55","4"=>"56","5"=>"57","6"=>"58","7"=>"59","8"=>"60","9"=>"61","0"=>"62");

$positionr= array("1"=>"a","2"=>"b","3"=>"c","4"=>"d","5"=>"e","6"=>"f","7"=>"g","8"=>"h","9"=>"i","10"=>"j","11"=>"k","12"=>"l","13"=>"m","14"=>"n","15"=>"o","16"=>"p","17"=>"q","18"=>"r","19"=>"s","20"=>"t","21"=>"u","22"=>"v","23"=>"w","24"=>"x","25"=>"y","26"=>"z",
				"27"=>"A","28"=>"B","29"=>"C","30"=>"D","31"=>"E","32"=>"F","33"=>"G","34"=>"H","35"=>"I","36"=>"J","37"=>"K","38"=>"L","39"=>"M","40"=>"N","41"=>"O","42"=>"P","43"=>"Q","44"=>"R","45"=>"S","46"=>"T","47"=>"U","48"=>"V","49"=>"W","50"=>"X","51"=>"Y","52"=>"Z",
				"53"=>"1","54"=>"2","55"=>"3","56"=>"4","57"=>"5","58"=>"6","59"=>"7","60"=>"8","61"=>"9","62"=>"0");


echo "<pre>";

print_r($position);
	print_r($positionr);





function encode($e,$n,$msg){

 	 $encrypted = array();

  	  $msg = str_split("$msg",1);
	
	  for ($i=0; $i<count($msg); $i++)
	  {
	  	
	      $msg[$i]=ord($msg[$i]); // convrt char to ascii code 
		// echo "<br>";
		 $encrypted[] = exponent($position($msg[$i]),$e,$n);
		 
	  }
	 // print_r($encrypted);
  
	 return implode(" ",$encrypted);
  
}

$cipher=encode($e,$n,$msg);
echo $cipher;
echo "</br>";	
//--------------------------------------
function decode($d,$n,$cipher){
  $decrypted = array();

  $cmsg = explode(" ",$cipher);
  
  	echo "<pre>";
	print_r($cmsg);
	

	  for ($i=0; $i<count($cmsg); $i++){
		echo $decrypted[] = dexponent($cmsg[$i],$d,$n);
	  }
		
	  
	  return join('',$decrypted);
}	
	
	
echo  decode($d,$n,$cipher);
	
	
//=======================================
// Other functions definitions
//=======================================	
	
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


 //================================
 
 
	function exponent($chr,$e,$n)
	{
		 $chre=pow($chr,$e);
		 $char=fmod($chre,$n);
	     $char= decbin($char);

		//return  $bin = substr("00000000",0,8-strlen($char)) . $char;
		 //
		 return $char;
	}
	
	
	function dexponent($cchr,$d,$n)
		{		
			 $cchar=bindec($cchr);
	
			 $cchre=pow($cchar,$d);
			 $cchar=fmod($cchre,$n);
			return chr($cchar);
			 //
			 
		}

//==================================

	function check_key($key_type,$key)
	{
	
		
	
	}
	
	
	
?>