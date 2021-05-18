<?php

include_once "ArrayList.php";

$listInteger = new ArrayList();

$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(4);
$listInteger->add(9);
$listInteger->add('acc');
$listInteger->remove(2);


echo $listInteger->get(3).'<br>';
echo $listInteger->size().'<br>';
echo $listInteger->isInteger("hbxbh");
