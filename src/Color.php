<?php

namespace Phrism;

class Color
{
    private $r;
    private $g;
    private $b;
    private $a;

    public function __construct(int $r, int $g, int $b, int $a = 0)
    {
        assert($r >= 0 && $r <= 255);
        assert($g >= 0 && $g <= 255);
        assert($b >= 0 && $b <= 255);
        assert($a >= 0 && $a <= 127);
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
        $this->a = $a;
    }

    public static function fromArray(array $rgba)
    {
        return new self($rgba[0], $rgba[1], $rgba[2], $rgba[3] ?? 0);
    }

    public static function fromHex($hex)
    {
        $rgba = hexToRgba($hex);
        return self::fromArray($rgba);
    }

    public static function random(bool $withAlpha = false)
    {
        return new self(
            rand(0, 255),
            rand(0, 255),
            rand(0, 255),
            ($withAlpha ? rand(0, 127) : 0)
        );
    }

    public static function randomWithAlpha(int $alpha)
    {
        assert($alpha >= 0 && $alpha <= 127);
        return new self(
            rand(0, 255),
            rand(0, 255),
            rand(0, 255),
            $alpha
        );
    }

    /**
     * Get the value of red
     */
    public function getRed()
    {
        return $this->r;
    }

    /**
     * Set the value of red
     *
     * @return  self
     */
    public function setRed($red)
    {
        assert($red >= 0 && $red <= 255);
        $this->r = $red;
        return $this;
    }

    /**
     * Get the value of green
     */
    public function getGreen()
    {
        return $this->g;
    }

    /**
     * Set the value of green
     *
     * @return  self
     */
    public function setGreen($green)
    {
        assert($green >= 0 && $green <= 255);
        $this->g = $green;
        return $this;
    }

    /**
     * Get the value of blue
     */
    public function getBlue()
    {
        return $this->b;
    }

    /**
     * Set the value of blue
     *
     * @return  self
     */
    public function setBlue($blue)
    {
        assert($blue >= 0 && $blue <= 255);
        $this->b = $blue;
        return $this;
    }

    /**
     * Get the value of alpha
     */
    public function getAlpha()
    {
        return $this->a;
    }

    /**
     * Set the value of a
     *
     * @return  self
     */
    public function setAlpha($alpha)
    {
        assert($alpha >= 0 && $alpha <= 127);
        $this->a = $alpha;
        return $this;
    }
}
