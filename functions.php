<?php

function format_price($price)
{
    $num = ceil($price);
    if ($num > 999) {
        $num = number_format($num, 0, '', ' ');
    }

    return $num . ' ' . '₽';
};

function calculate_remaining_time(string $date)
{
    date_default_timezone_set('Europe/Moscow');
    $current_date = date_create('now');
    $expiration_date = date_create($date);
    $diff = date_diff($expiration_date, $current_date);
    $formatted_diff = date_interval_format($diff, "%d %H %I");
    $arr = explode(" ", $formatted_diff);

    $remaining_hours = $arr[0] * 24 + $arr[1];
    $remaining_minutes = $arr[2];
    $remaining_hours = str_pad($remaining_hours, 2, "0", STR_PAD_LEFT);
    $remaining_minutes = str_pad($remaining_minutes, 2, "0", STR_PAD_LEFT);

    return [$remaining_hours, $remaining_minutes];
}
