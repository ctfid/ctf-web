<?php
for($i=0;$i<=99999;$i++){
	$iw = strval($i);
	if($iw[0] > 6 and $iw[3] + $iw[2] > 12){
		if($iw[2]+$iw[5] < $iw[0]){
			if($iw[2] >= $iw[1]+$iw[4]){
				if($iw[0] > $iw[4]+$iw[1]){
					if($iw[3] < $iw[0]-$iw[4]){
						if($iw[0]+$iw[4] > $iw[2]){
							if($iw[1]+$iw[4] == $iw[5]){
								echo $iw."<br>";
							}
						}
					}
				}
			}
		}
	}
}


# Running:

// 8067
// 8076
// 8077
// 9058
// 9067
// 9068
// 9076
// 9077
// 9078
// 9085
// 9086
// 9087
// 9088
// 80670
// 80760
// 80770
// 90580
// 90670
// 90680
// 90760
// 90770
// 90780
// 90850
// 90860
// 90870
// 90880


# Untuk key nya bisa kita gunakan salah satu dari hasil
# generate an diatas
?>