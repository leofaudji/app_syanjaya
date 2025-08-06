<?php
class Rptdashpelanggan_m extends Bismillah_Model{
   
   public function loaddata(){ 
      $f        = "a.id,a.pelanggan" ; 
      $dbd      = $this->select("absensi a", $f, "","", "", "a.id DESC", "1") ;
      $row      = array() ;
      if($dbra  = $this->getrow($dbd)){
         $row = $dbra ;
      } 
      return $row ;
   } 
   
   public function getpelanggan($id){
      $va = array() ;
      $dba      = $this->select("pelanggan", "*","kode = '$id'") ;
      if($dbra  = $this->getrow($dba)){
         $va   = $dbra ; 
      } 
      return $va ;
   } 
   
    
}
?>