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
    private  $RESPONSE;
    private  $TABLE_RESPONSE;
    private  $FILENAME;

    public function __construct(Object $RESPONSE){
        if (is_object($RESPONSE)) {
            $this->RESPONSE = $RESPONSE->result;
        } else {
            throw $this->exception("Connection Must Be Object");
        }
    }
    public function xls($filename = '',$download = false){
        if ($filename == '' || $filename == 1) {
            $this->FILENAME = 'simpleconvert-'.mt_rand(1000,9999).'.xls';
            return $this->TABLE_RESPONSE = $this->prepare($this->RESPONSE,"xls",$download,$this->FILENAME);
            // throw $this->exception("Parameter Must Be The File Name");
        }else{
            if (is_string($filename) && $filename != '') {
                $this->FILENAME = $filename;
            }else{
                throw $this->exception("FileName Must Be String or Not Null");
            }
        }
        return $this->TABLE_RESPONSE = $this->prepare($this->RESPONSE,"xls",$download,$this->FILENAME);
    }
}
