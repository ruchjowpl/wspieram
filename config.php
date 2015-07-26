<?php

$current = '175 tys.';

function isValidReferer(){
    if(!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])){
        return false;
    }

    return (stripos($_SERVER['HTTP_REFERER'], 'transferuj.pl') !== false);
}