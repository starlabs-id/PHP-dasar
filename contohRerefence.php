<?php

/* Contoh Program Reference PHP */

$nama = 'Jojo';               		 // Assign the value 'Jojo' to $nama
$Anda = &$nama;             		 // Reference $nama melalui $Anda.
$Anda = "nama saya adalah $Anda";  	 // Mengalter variable $Anda
echo "isi variable anda = " . $Anda;	// output: nama saya adalah Jojo
echo "<br><br>";
echo "isi variable nama = " . $nama;     // output: nama saya adalah Jojo

?>
