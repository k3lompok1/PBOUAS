<?php
   
   //class parent
   class buah{
     
     //property class buah
     public $nama_saya;
     
     //method pada class buah
     function berinama($saya) {
       $this->nama_saya=$saya;
     }
   
}

//class turunan atau sub class dari class buah
//kita menghubungkan class dengan syntax extends
class teman extends buah{
  
  //property class teman
  public $nama_teman;
  
  //method pada class teman
  function berinama($teman) {
    $this->nama_teman=$teman;
  }
  
}

//instansiasi class teman
$malasngoding = new teman;

//method beri nama adalah method pada class manusia, tapi kita bisa mengubahnya
$malasngoding->berinama (" PULUNG CODING ");
$malasngiding->berinamateman (" Buah ");

//menampilkan isi property
echo "Nama Saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;

?>