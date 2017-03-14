<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : ";echo $obj->nim;
echo "<br>";
echo "Nama: "; echo $obj->profil[0];
echo "<br>";
echo "Prodi: "; echo $obj->profil[1];
echo "<br>";
echo "Mata Kuliah: ";echo $obj->profil[2];

?>