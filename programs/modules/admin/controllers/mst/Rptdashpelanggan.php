<?php
class Rptdashpelanggan extends Bismillah_Controller{
  protected $bdb ; 
  public function __construct(){ 
    parent::__construct() ;
    $this->load->helper("bdate") ; 
    $this->load->helper("toko") ; 
    $this->load->model("mst/rptdashpelanggan_m") ;
    $this->bdb   = $this->rptdashpelanggan_m ;
  }

  public function index(){
    $this->load->view("mst/rptdashpelanggan") ;
  
  }  

  public function init(){
    savesession($this, "ssrptdashpelanggan_id", "") ;
  } 
  
  public function loaddata(){
    $va   = $this->bdb->loaddata() ;  
    $va1  = $this->bdb->getpelanggan($va['pelanggan']) ; 
    //print_r($va1) ;
    $image = '<img src=\"./uploads/no-image.png\" class=\"img-responsive\"/>' ; ;
    if(!empty($va1['data_var'])){      
      $image   = '<img src=\"'.base_url($va1['data_var']).'\" class=\"img-responsive\"/>' ;
    }
    //
    echo('  
      bos.rptdashpelanggan.obj.find("#memberid").html("ID: '.$va['pelanggan'].'") ;  
      bos.rptdashpelanggan.obj.find("#membernama").html("'.strtoupper($va1['nama']).'") ;        
      bos.rptdashpelanggan.obj.find("#memberfoto").html("'.$image.'") ;

    ') ; 
  }


}
?>
