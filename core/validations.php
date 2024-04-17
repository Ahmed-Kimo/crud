<?php

function checkempty($input){
    if(empty($input)){
        return true ;
    }
    return false ;
}


function minval($input , $length){
    if(strlen($input) < $length){
        return true ;
    }
    return false ;
}


function maxval($input , $length){
    if(strlen($input) > $length){
        return true ;
    }
    return false ;
}


function emailvalid($input){
    if(filter_var($input , FILTER_VALIDATE_EMAIL)){
        return true ;
    }
    return false ;
}