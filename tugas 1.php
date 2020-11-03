<?php

trait Hewan
{
    public $health = 50;
    public function atraksi()
    {
        echo $this->getName() . 'sedang' . $this->getAbility();
    }

    abstract public function getName();
    abstract public function getLegs();
    public function getHealth()
    {
        return $this->health;
    }
    public function setHealth($new.health)
}
class Elang {
    use Hewan, Fight;

    public $legs = 2;
    public $ability = "terbang tinggi";
    public $attackPower = 10;
    public $defencePower = 5;

    public function getInfoHewan(){
        return $this->hewan;
    }
}
$Elang_1 = new Elang;
echo
class Harimau {
    use Hewan, Fight;

    public $legs = 4;
    public $ability = "lari cepat";
    public $attackPower = 7;
    public $defencePower = 8;

    public function getInfoHewan(){
        return $this->hewan;
}
