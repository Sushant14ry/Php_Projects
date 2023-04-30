<?php
	
	$data = $_GET['$datavalue'];

	$a = array('Pune','Mumbai');
	$b = array('Gorakhpur','Lokhnow');
	$c = array('Lishanganj','Patna');


	if($data == 'Maharastra'){
		foreach($a as $a1){
			echo "<option>$a1</option>";
		}
	}
	if($data == 'UP'){
		foreach($b as $b2){
			echo "<option>$b2</option>";
		}
	}
	if($data == 'Bihar'){
		foreach($c as $c3){
			echo "<option>$c3</option>";
		}
	}

echo $data;
?>