<?php 

//class manusia
class manusia{
  //property
  var $nama; 
  var $warna; 
  
  function __construct() {
    echo "Buah kedongdong";
}

  //method manusia
  function tampilkan_nama() {
      return "Nama saya kedongdong";
  }

}
//instansiasi class manusia
$manusia = New manusia();

//memanggil method tampilkan_Nama dari class manusia
echo $manusia->tampilkan_nama();
?>