<?php

$merek_motor = "yamaha jupiter MX 2014";

if ($merek_motor == "yamaha mio 2019") {
    $harga = "Rp.16.000.000";
} else if ($merek_motor == "yamaha jupiter MX 2014") {
    $harga = "Rp.11.000.000";
} else if ($merek_motor == "honda vario 125cc 2020") {
    $harga = "Rp.18.000.000";
} else if ($merek_motor == "honda supra 125 2015") {
    $harga = "Rp.10.000.000";
} else if ($merek_motor == "honda PCX 125cc 2018") {
    $harga = "Rp.23.000.000";
}

echo ("harga ".$merek_motor." adalah ".$harga);

?>