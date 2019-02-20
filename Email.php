<?php

class Email extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('email'); //load email library
  }
  
  public function index(){
    //config for email library
    $config = array (
       'protocol'   => 'smtp',
       'smtp_host'  => 'ssl://smtp.gmail.com',
       'smtp_port'  => 465,
       'smtp_user'  => '[YOUR EMAIL]',
       'smtp_pass'  => '[YOUR PASSWORD EMAIL]',
       'mailtype'   => 'html',
       'charset'    => 'utf-8'
       );
       
    $this->load->library('email', $config); //if not load library in constructor
    //$this->email->initialize($config);
    $this->email->set_newline("\r\n");
    
    $this->email->from('[YOUR EMAIL]');
    $this->email->to('[TARGET EMAIL]');
    $this->email->subject('[TITLE OF EMAIL]');
    $this->email->message('[MESSAGE]');
    
    $sent = $this->email->send();
    
    if($sent){
      //code here
    } else {
      //code here
    }
    
