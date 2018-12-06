<?php
include('lib/bootstrap.lib.php');
include('index.phtml');
$r1 = new Rectangle (20,30);

$r2 = new Rectangle (60,120);
$r2->setAnchorPoint(150,150);

$r3 = new Rectangle (150,120);
$r3->setAnchorPoint(200,450);
$r3->setfill('#45ff74');
$tableau = new Paint();
$tableau->addShape($r1);
$tableau->addShape($r2);
$tableau->addShape($r3);
//var_dump($tableau);
$svg = $tableau->render();

echo $svg;

var_dump($r1);
var_dump($r2);