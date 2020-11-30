<?php
 
//class manusia
class manusia{
  //property
  var $nama; 
  var $warna; 
  
  //method construct di jalankan pertama kali
  function __construct() {
    echo "strawberry";
  }
    
  //method destruct di jalankan terakhir
  function __destruct(){
       echo "strawberry";  
      
  }
  
  //method manusia
  function tampilkan_nama(){
  return  "strawberry";
  }
}

//instansiasi class manusia
$manusia =new manusia ();

//memanggil method tampilan_nama dari class manusia
echo $manusia->tampilkan_nama();