<?php

function converteData ($data, $formato = 'br') {

    if($formato == "br") {
        $data = explode("-", $data);
        $data = array_reverse($data);
        $data = implode("/", $data);
    } else {
        $data = explode("/", $data);
        $data = array_reverse($data);
        $data = implode("-", $data);
    }

    echo $data;
}

converteData('2018-05-15');