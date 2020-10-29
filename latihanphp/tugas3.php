<?php
echo "<p>Contoh 1</p>";
function biodata() {
	echo "Putu Laksmi Savitri";
	echo "</br>";
	echo "18510007";
	echo "</br>";
	echo "Sistem Informasi";
}

function perkenalan() {
	echo "Data Mahasiswa :";
	echo "</br>";
	biodata();
}

perkenalan();

echo "<p>Contoh 2</p>";
$nama = "Putu Laksmi Savitri";
$umur = 21;
echo $nama;
echo "</br>";
echo $umur;
echo "</br>";
echo "Halo, perkenalkan nama saya ".$nama." dan saya berumur ".$umur;

?>