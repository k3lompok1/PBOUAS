<?php
 //class manusia 
 class manusia{
   //prop
   public $nama; 
   public $warna; 
   
   //method manusia
   function tampilkan_nama(){
      return "Buah semangka";
      }
      
}
//instansiasi class manusia 
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();