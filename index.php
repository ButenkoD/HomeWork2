<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/23/13
 * Time: 9:18 PM
 * To change this template use File | Settings | File Templates.
 */

function __autoload($class)
{
    require_once "$class.php";
}

$cat1 = new Cat();
$cat1->setColor('black');
$cat1->setWeight(5);
$cat1->setLimb(4);
print ("<br>" . $cat1->getColor());
print ("<br>" . $cat1->getLimb());