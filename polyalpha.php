<?php

function generateSquare($key)
{
    $key = str_replace(' ', '', $key);
    $key = strtoupper($key);
    $alphabet = 'ABCDEFGHIKLMNOPQRSTUVWXYZ';
    $alphabet = str_split($alphabet);
    $key = str_split($key);
    $key = array_merge($key, $alphabet);
    $key = array_unique($key);
    $key = array_values($key);
    $key = implode('', $key);
    $key = substr($key, 0, 25);
    return $key;
}


function encrypt($plaintext, $key)
{
    $keySquare = generateSquare($key);
    $text = str_replace(' ', '', $plaintext);
    $text = strtoupper($text);
    $text = str_split($text);
    $text = array_chunk($text, 2);
    $text = array_map(function ($pair) {
        if (count($pair) == 1) {
            $pair[] = 'X';
        }
        return $pair;
    }, $text);
    $text = array_map(function ($pair) use ($keySquare) {
        if (isset($pair[0]) && isset($pair[1])) {
            list($x1, $y1) = str_split($pair[0], 1);
            list($x2, $y2) = str_split($pair[1], 1);
            $x1 = strpos($keySquare, $x1) % 5;
            $y1 = floor(strpos($keySquare, $y1) / 5);
            $x2 = strpos($keySquare, $x2) % 5;
            $y2 = floor(strpos($keySquare, $y2) / 5);
            if ($x1 == $x2) {
                $y1 = ($y1 + 1) % 5;
                $y2 = ($y2 + 1) % 5;
            } elseif ($y1 == $y2) {
                $x1 = ($x1 + 1) % 5;
                $x2 = ($x2 + 1) % 5;
            } else {
                $temp = $y1;
                $y1 = $y2;
                $y2 = $temp;
            }
            return [
                $keySquare[($x1 + 5 * $y1) % 25],
                $keySquare[($x2 + 5 * $y2) % 25],
            ];
        } else {
            return $pair; // Jika panjang kurang dari 2, kembalikan pair aslinya
        }
    }, $text);
    $text = array_map(function ($pair) {
        return implode('', $pair);
    }, $text);
    $text = implode(' ', $text);
    return $text;
}

function decrypt($chipertext, $key)
{
    $keySquare = generateSquare($key);
    $text = str_replace(' ', '', $chipertext);
    $text = strtoupper($text);
    $text = str_split($text);
    $text = array_chunk($text, 2);
    $text = array_map(function ($pair) use ($keySquare) {
        if (isset($pair[0]) && isset($pair[1])) {
            list($x1, $y1) = str_split($pair[0], 1);
            list($x2, $y2) = str_split($pair[1], 1);
            $x1 = strpos($keySquare, $x1) % 5;
            $y1 = floor(strpos($keySquare, $y1) / 5);
            $x2 = strpos($keySquare, $x2) % 5;
            $y2 = floor(strpos($keySquare, $y2) / 5);
            if ($x1 == $x2) {
                $y1 = ($y1 - 1 + 5) % 5;
                $y2 = ($y2 - 1 + 5) % 5;
            } elseif ($y1 == $y2) {
                $x1 = ($x1 - 1 + 5) % 5;
                $x2 = ($x2 - 1 + 5) % 5;
            } else {
                $temp = $y1;
                $y1 = $y2;
                $y2 = $temp;
            }
            return [
                isset($keySquare[($x1 + 5 * $y1) % 25]) ? $keySquare[($x1 + 5 * $y1) % 25] : '',
                isset($keySquare[($x2 + 5 * $y2) % 25]) ? $keySquare[($x2 + 5 * $y2) % 25] : '',
            ];
        } else {
            return $pair; // Jika panjang kurang dari 2, kembalikan pair aslinya
        }
    }, $text);
    $text = array_map(function ($pair) {
        return implode('', $pair);
    }, $text);
    $text = implode(' ', $text);
    return $text;
}
