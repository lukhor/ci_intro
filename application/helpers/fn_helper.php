<?php

function label($label,$obj){
    $rs = $obj->lang->line("$label");
    if($rs){
        return $rs;
    } else {
        return $label;
    }
}