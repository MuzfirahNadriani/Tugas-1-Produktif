 <?php

 class kawat{

 	var $a;
 	var $b;
 	var $c;

 	function kawat_a(){
 		echo "Kawat 1 meter seharga Rp.30000";
 		echo "<br>";
 	}
 	function kawat_b(){
 		echo "Kawat 2 meter seharga Rp.48000";
 		echo "<br>";
 	}
 	function kawat_c(){
 		echo "Kawat 3 meter seharga Rp.60000";
 		echo "<br>";
 	}

 }

$kawat = new kawat();
$kawat = new kawat();
$kawat = new kawat();

echo $kawat -> kawat_a();
echo $kawat -> kawat_b();
echo $kawat -> kawat_c();

?>