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
print ("CAT");
print ("<br>" . $cat1->getColor());
print ("<br>" . $cat1->getLimb());
print ("<br>" . $cat1->move() . "<br>");

print ("<br> BEAR");
$bear1 = new Bear();
$bear1->setColor('brown');
$bear1->setWeight(100);
$bear1->setLimb(4);
print ("<br>" . $bear1->getColor());
print ("<br>" . $bear1->getLimb());
print ("<br>" . $bear1->move() . "<br>");

print ("<br> EAGLE");
$eagle1 = new Eagle();
$eagle1->setColor('gold');
$eagle1->setWeight(5);
$eagle1->setWing(2);
print ("<br>" . $eagle1->getColor());
print ("<br>" . $eagle1->getWing());
print ("<br>" . $eagle1->fly() . "<br>");

print ("<br> DOVE");
$dove1 = new Dove();
$dove1->setColor('grey');
$dove1->setWeight(1);
$dove1->setWing(2);
print ("<br>" . $dove1->getColor());
print ("<br>" . $dove1->getWing());
print ("<br>" . $dove1->fly());