<?php 
 function isUppercase($value, $messages, $fall){
    if( $value!=\mb_strtoupper($value, 'UTF-8')){
        $fall($messages);
    }
}
?>