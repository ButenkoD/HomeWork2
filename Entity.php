<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 9:46 PM
 * To change this template use File | Settings | File Templates.
 */

abstract class Entity
{
    protected $color;
    protected $weight;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getColor()
    {
        return "is " . $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}