<?php

 $nilai_produktif = "100";

 if ($nilai_produktif > 90) {
    $berarti = "Sangat Baik";                                
 } else if ($nilai_produktif > 80) {
    $berarti = "Baik";
} else if ($nilai_produktif > 70) {
    $berarti = "Cukup";
 } else if ($nilai_produktif > 50) {
    $berarti = "Kurang";
 } else if ($nilai_produktif < 49) {
    $berarti = "Sangat Kurang";
 } 

 echo ("nilai mapel produktif ".$nilai_produktif." maka ".$berarti);

?>