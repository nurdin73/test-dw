<?php
// Hitung sesuai voucher yang digunakan
function dumbWaysAsik()
{
	$potongan = (40 / 100);
	return $potongan;
}
function dumbWaysMantap()
{
	$potongan = (30 / 100);
	return $potongan;
}
function hitungvoucher($voucher, $uang)
{
	$output = 0;
	$hasil = 0;
	$kembalian = 0;
	if ($uang >= 20000) {
		$hasil = $voucher * $uang;
		if ($hasil >= 20000) {
			$output = 20000;
			$kembalian = $uang - $output;
		} else {
			$output = $hasil;
			$kembalian = $uang - $output;
		}
	}
	if ($uang >= 50000) {
		$hasil = $voucher * $uang;
		if ($hasil >= 40000) {
			$output = 40000;
			$kembalian = $uang - $output;
		} else {
			$output = $hasil;
			$kembalian = $uang - $output;
		}
	}

	echo "Uang Yang Harus Dibayar : $output <br>";
	echo "Diskon : $hasil <br>";
	echo "Kembalian : $kembalian <br>";

}


hitungvoucher(dumbWaysAsik(), 30000);
