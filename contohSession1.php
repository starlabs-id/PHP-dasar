<?php
/* mengaktifkan session */
session_start();

/* deklarasi dan inisiasi variable session */
$_SESSION["Nama"] = "Jauhari";
$_SESSION["NIM"] = "101524001";

/* periksa variable session */

if(isset($_SESSION["Nama"]) and isset($_SESSION["NIM"]) )
{
   $Nama = $_SESSION["Nama"]; //menyimpan variable session pada variable PHP
   $NIM  = $_SESSION["NIM"]; //menyimpan variable session pada variable PHP	


   echo "Nama : ". $Nama; //menampilkan Nama
   echo "<br>NIM : ".$NIM;//menampilkan NIM
}
	else{
	    echo "Variable session Nama atau NIM belum di set";
	    }

?>