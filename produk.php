<?php

//class manusia 
class manusia {
  //menentukan property dengan private
  private $nama = "Buah anggur";
  
  //method publik
  public function tampilkan_nama() {
     return "Buah anggur" .$this->nama;
     
  }
     
     
     
}
//instansiasi class manusia();
$manusia = new manusia () ;

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();