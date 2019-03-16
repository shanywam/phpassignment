<?php
class Flowers
{
    public $name;
    public $color;
    public $scent;

    public function setName($name)
    {
        $this->name=$name;
        return $this;
    }
    public function setColor($color)
    {
        $this->color=$color;
        return $this;
    }
    public function setScent($scent)
    {
        $this->scent=$scent;
        return $this;
    }
    public function getDetails()
    {
        echo"Color:$this->color, Name:$this->name, Scent:$this->scent";
    }
}
$flower=new Flowers();
$flower->setName('roses')->setColor('red')->setScent('nice')->getDetails();


?>