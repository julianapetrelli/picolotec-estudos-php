<?php

function recursivo($i) {
    if ($i <= 10) {
        echo $i . "<br>";
        recursivo($i + 1);
    }
}

recursivo (0);