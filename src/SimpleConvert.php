<?php


# SIMPLE CONVERT 
# v1.0.0
# AUTHOR : Tirth Jain


namespace SimpleConvert;

require_once __DIR__.'/../inc/Use.php';
require_once __DIR__.'/../inc/Rejection.php';
require_once __DIR__.'/../inc/FUNCTIONAL.php';

use Convert;   # INTERFACE
use FUNCTIONAL;  # Custom Exception Handle CLASS

class SimpleConvert extends FUNCTIONAL implements Convert{
    private  $response;
    private  $header;
    private  $TABLE_RESPONSE;
    private  $FILENAME;

    public function __construct(Object $response){
        if (is_object($response)) {
            $this->response = $response->result;
            $this->header   = $response->header;
        } else {
            throw $this->exception("Connection Must Be Object");
        }
    }
    public function xls(String $filename ,$download = false){
        if ($filename == '' || $filename == 1) {
            throw $this->exception("Parameter Must Be The File Name");
        }else{
            if (is_string($filename) && $filename != '') {
                $this->FILENAME = $filename;
            }else{
                throw $this->exception("FileName Must Be String");
            }
        }
        return $this->TABLE_RESPONSE = $this->prepare($this->response,$this->header,"xls",$download,$this->FILENAME);
        
    }
}
