<?php
# สุ่มหมายเลขบัตรประชาชน
function randomCitizenID(){
	for($i=0;$i<12;$i++){
		$k = abs($i + (-13));
		$m = rand(0,9);
		$firstNumber .= $m; // ตัวเลขชุดแรก (12 หลัก)
		$numberCalc += ($k * $m);
	}
	$lastNumber = 11 - ($numberCalc % 11); // ตัวเลขหลักสุดท้าย
	return $firstNumber.$lastNumber;
}

# แสดงผล
echo randomCitizenID();
?>