<?php

namespace Phrism;

function StrToHex($str)
{
    return implode(unpack('H*', $str));
}

function HexToStr($hex)
{
    return pack("H*", $hex);
}


function HexToRgb(int $hexValue)
{
    $rr = ($hexValue >> 16) & 0xFF;
    $gg = ($hexValue >> 8) & 0xFF;
    $bb = ($hexValue) & 0xFF;
    return [$rr, $gg, $bb];
}

function colorHexHasAlpha(int $hex): bool
{
    return ($hex >> 24) > 0;
}

function HexToRgba(int $hexValue)
{
    if (colorHexHasAlpha($hexValue)) {
        $rr = ($hexValue >> 32) & 0xFF;
        $gg = ($hexValue >> 16) & 0xFF;
        $bb = ($hexValue >> 8) & 0xFF;
        $aa = ($hexValue) & 0xFF / 2;
    } else {
        echo "ALPHA";
        $rgb = HexToRgb($hexValue);
        $rr = $rgb[0];
        $gg = $rgb[1];
        $bb = $rgb[2];
        $aa = 0;
    }
    
    return [$rr, $gg, $bb, $aa];
}
