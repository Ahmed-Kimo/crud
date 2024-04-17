<?php

function checkRequestMethod(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        return true ;
    }
    return false ;
}

