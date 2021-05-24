<?php

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';

    if (preg_match($regexp, $str)){
        echo "string's first character is uppercase";
    }else{
        echo "string's first character is not uppercase";
    }
}


isFirstLetterUpperCase("Hello");