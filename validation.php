<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 11/20/16
 * Time: 9:35 AM
 */
function pf_validate_number($value, $function, $redirect) {
    if(isset($value) == TRUE) {
        if(is_numeric($value) == FALSE) {
            $error = 1;
        }
        if($error == 1) {
            header("Location: " . $redirect);
        }
        else {
            $final = $value;
        }
    }
    else {
        if($function == 'redirect') {
            header("Location: " . $redirect);
        }
        if($function == "value") {
            $final = 0;
        }
    }
    return $final;
}
