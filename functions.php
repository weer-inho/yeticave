<?php

function format_price($price) {
    $num = ceil($price);
    if ($num > 999) {
        $num = number_format($num, 0, '', ' ');
    }

    return $num . ' ' . '₽';
};
