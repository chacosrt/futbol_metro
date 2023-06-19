<?php 

class salirController extends Controller {
  function __construct(){ }

  function index(){  }
  
  function salgo(){
    $_SESSION = array();
    session_destroy();
    json_output(json_build(200));
  }

  
}