<?php
namespace Helper;
class Ajax{
    const ERROR_FIELD       =   'error';
    const MESSAGE_FIELD     =   'message';
    const CODE_FIELD        =   'code';
    const DATA_FIELD        =   'data';
    
    public static function error($code  =   NULL,$message   =   NULL,$data  =   NULL){
        return json_encode(array(
            self::ERROR_FIELD   =>  TRUE,
            self::MESSAGE_FIELD =>  $message,
            self::CODE_FIELD    =>  $code,
            self::DATA_FIELD    =>  $data
        ));
    }
    
    public static function message($code    =   NULL,$message   =   NULL,$data  =   NULL){
        return json_encode(array(
            self::ERROR_FIELD   =>  FALSE,
            self::MESSAGE_FIELD =>  $message,
            self::CODE_FIELD    =>  $code,
            self::DATA_FIELD    =>  $data
        ));        
    }
}