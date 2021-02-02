<?php
class Color{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue){
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(){
        return $this->red;
    }

    private function setRed($red){
        if (!is_int($red)){
            throw new Exception('Invalid number');
        }else if (($red<0) || ($red>255)){
            throw new Exception('Number should be from 0 to 255');
        }

        $this->red = $red;
    }

    public function getGreen(){
        return $this->green;
    }

    private function setGreen($green){
        if (!is_int($green)){
            throw new Exception('Invalid number');
        }else if (($green<0) || ($green>255)){
            throw new Exception('Number should be from 0 to 255');
        }

        $this->green = $green;
    }

    public function getBlue(){
        return $this->blue;
    }

    private function setBlue($blue){
        if (!is_int($blue)){
            throw new Exception('Invalid number');
        }else if (($blue<0) || ($blue>255)){
            throw new Exception('Number should be from 0 to 255');
        }

        $this->blue = $blue;
    }

    public function equal($color2)
    {
        if (($this->getRed() == $color2->getRed()) && ($this->getGreen() == $color2->getGreen()) && ($this->getBlue() == $color2->getBlue())) {
            return true;
        }else {
            return false;
        }
    }

    public static function randColor($some_color){
        $some_color->setRed(rand(0,255));
        $some_color->setGreen(rand(0,255));
        $some_color->setBlue(rand(0,255));
    }

    public function mixColors($color2)
    {
        $red = intdiv($this->getRed() + $color2->getRed(), 2);
        $green = intdiv($this->getGreen() + $color2->getGreen(), 2);
        $blue = intdiv($this->getBlue() + $color2->getBlue(), 2);

        $mixedColor = new Color(0, 0, 0);

        $mixedColor->setRed($red);
        $mixedColor->setGreen($green);
        $mixedColor->setBlue($blue);

        return($mixedColor);
    }
}

$color1 = new Color(107, 21, 14);
$color2 = new Color(110, 119, 77);

echo 'Color 1: ('.$color1->getRed().', '.$color1->getGreen().', '.$color1->getBlue().')';
echo '<br>';
echo 'Color 2: ('.$color2->getRed().', '.$color2->getGreen().', '.$color2->getBlue().')';
echo '<br><br>';

echo 'Are they equal?';
if ($color1->equal($color2) == true) {
    echo '- Yes, they are.'.'<br><br>';
}else echo '- No, they are not'.'<br><br>';

$rand = new Color(0, 0, 0);
$rand::randColor($rand);
echo 'Random Color: ('.$rand->getRed().', '.$rand->getGreen().', '.$rand->getBlue().')';
echo '<br><br>';

$mixedColor = $color1->mixColors($color2);
echo 'Mixed Color: ('.$mixedColor->getRed().', '.$mixedColor->getGreen().', '.$mixedColor->getBlue().')';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGB Magic</title>
    <style>
        body {
            background-color: rgb<?='('.$mixedColor->getRed().', '.$mixedColor->getGreen().', '.$mixedColor->getBlue().')'?>;
        }
    </style>
</head>
<body>
<h1>This page is printed to the mixed color</h1>
</body>
</html>