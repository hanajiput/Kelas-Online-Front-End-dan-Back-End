<?php 
	$nama = "Hanif Ajijaya Putra";
	$tinggibadan = "167 cm";
	$beratbadan = "60 kg";

	echo " ";

	if ($beratbadan == "60 kg") {
		echo "Halo, $nama. Nilai BMI anda adalah $tinggibadan dan $beratbadan, anda termasuk sedang";
	}elseif ($beratbadan > "60 kg") {
		echo "Halo, $nama. Nilai BMI anda adalah $tinggibadan dan $beratbadan, anda termasuk gemuk";
	}else {
		echo "Halo, $nama. Nilai BMI anda adalah $tinggibadan dan $beratbadan, anda termasuk kurus";
	}
 ?>