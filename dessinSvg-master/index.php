<?php
include('lib/bootstrap.lib.php');
//include('layout.phtml');




$r1 = new Rectangle (20,30);

$r2 = new Rectangle (60,120);
$r2->setAnchorPoint(150,150);

$r3 = new Rectangle (150,120);
$r3->setAnchorPoint(200,450);
$r3->setfill('#45ff74');

$c1 = new Carre (300);
$c1->setAnchorPoint(100, 200);
$c1->setfill('#21AA12');

$e1 = new Ellipse (60, 150);
$e1->setAnchorPoint(50,120);

$ce1 = new Cercle (60);
$ce1->setAnchorPoint(50,120);
$ce1->setfill('orange');

$t1 = new Triangle ();
$t1->setAnchorPoint2(120,120);
$t1->setAnchorPoint3(160,140);


//var_dump($t1);
$tableau = new Paint();
/*foreach ( as $forme){

    array_push($tableau->$dessin, $forme);
}*/
$tableau->addShape($r1)->addShape($r2)->addShape($r3)->addShape($c1)->addShape($e1)->addShape($ce1)->addShape($t1);

//var_dump($tableau);
$svg = $tableau->render();

echo $svg;
