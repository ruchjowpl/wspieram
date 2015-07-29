<?php

$current = '185 tys. zł';

function isValidReferer(){
    if(!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])){
        return false;
    }

    return (stripos($_SERVER['HTTP_REFERER'], 'transferuj.pl') !== false);
}