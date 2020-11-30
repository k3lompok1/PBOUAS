<?php
//class manusia
class manusia{
  //property
  var $nama; 
  var $warna; 
  
  
  //method manusia
  function tampilkan_nama(){
    return "Buah Buahan ";
    }
  function warna_Buah(){
    return "Beraneka Ragam";
    }
}
//instansiasi class manusia
$manusia = New manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_Nama();