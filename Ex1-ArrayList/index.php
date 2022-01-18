<?php
include_once "MyList.php";

$myList = new MyList(5);
$myList->add(3);
$myList->add(4);
var_dump($myList->elements);
echo "<br>";
echo $myList->isEmpty();
echo "<br>";
$myList->remove(0);
var_dump($myList->elements);
$arr = [3, 2, 4, 1];
$myList->addAll($arr);
echo "<br>";
var_dump($myList->elements);

