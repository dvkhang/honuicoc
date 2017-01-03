<?php 
    function the_excerpt($text, $string = 70) {
        $sanitized = htmlentities($text, ENT_COMPAT, 'UTF-8');
        if(strlen($sanitized) > $string) {
            $cutString = substr($sanitized,0,$string);
            $words = substr($sanitized, 0, strrpos($cutString, ' '));
            if(strlen($words)<1){
                return $sanitized;
            }
            return $words."...";
        } else {
            return $sanitized;
        }
    } // End the_excerpt
 ?>