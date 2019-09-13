<?php
require __DIR__.'/../vendor/autoload.php';

use Phrism\Color;

function colorBlock(Color $color)
{
    return "<div class='color-block' style='background: {$color->toHex()}'></div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phrism Examples</title>
    <style>
    .color-block {
        border: 1px solid #000;
        width: 50px;
        height: 20px;
    }
    </style>
</head>
<body>
<dl>
    <dt>RGB (200, 100, 100)</dt>
    <dd><?=colorBlock(new Color(200, 100, 100))?></dd>
    <dt>RGB (200, 100, 100, 80)</dt>
    <dd><?=colorBlock(new Color(200, 100, 100, 80))?></dd>
    <dt>Random</dt>
    <dd><?=colorBlock(Color::random())?></dd>
    <dt>Random including alpha</dt>
    <dd><?=colorBlock(Color::random(true))?></dd>
    <dt>Random with alpha 100</dt>
    <dd><?=colorBlock(Color::randomWithAlpha(100))?></dd>
    <dt>From Hex #ff0000</dt>
    <dd><?=colorBlock(Color::fromHex(0xff0000))?></dd>
    <dt>From Hex #00ff00</dt>
    <dd><?=colorBlock(Color::fromHex(0x00ff00))?></dd>
    <dt>From Hex #0000ff</dt>
    <dd><?=colorBlock(Color::fromHex(0x0000ff))?></dd>
    <dt>From Hex #0000ff00</dt>
    <dd><?=colorBlock(Color::fromHex(0x0000ff00))?></dd>
    <dt>From Hex #0000ff77</dt>
    <dd><?=colorBlock(Color::fromHex(0x0000ff77))?></dd>
    <dt>From Hex #0000ffaa</dt>
    <dd><?=colorBlock(Color::fromHex(0x0000ffaa))?></dd>
</dl>
</body>
</html>