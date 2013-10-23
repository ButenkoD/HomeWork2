<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 8:56 PM
 * To change this template use File | Settings | File Templates.
 */

//namespace Animal;


abstract class Animal extends Entity
{
    protected $limb;

    public function setLimb($limb)
    {
        $this->limb = $limb;
    }

    public function getLimb()
    {
        return "has ".$this->limb." limbs";
    }

    public function move()
    {
        return "I can run and jump";
    }

}