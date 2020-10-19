<?php

include_once "Node.php";
include_once "Tree.php";
$myTree = new Tree;

$name = 'Electronics'; $parent = NULL;
$myTree->insertPub($name, $parent);
$name = 'Televisions'; $parent = 'Electronics';
$myTree->insertPub($name, $parent);
$name = 'Tube'; $parent = 'Televisions';
$myTree->insertPub($name, $parent);
$name = 'Lcd'; $parent = 'Televisions';
$myTree->insertPub($name, $parent);
$name = 'Plasma'; $parent = 'Televisions';
$myTree->insertPub($name, $parent);
$name = 'Portable Electronics'; $parent = 'Electronics';
$myTree->insertPub($name, $parent);
$name = 'MP3 Players'; $parent = 'Portable Electronics';
$myTree->insertPub($name, $parent);
$name = 'Flash'; $parent = 'MP3 Players';
$myTree->insertPub($name, $parent);
$name = 'CD Players'; $parent = 'Portable Electronics';
$myTree->insertPub($name, $parent);
$name = '2 Way Radios'; $parent = 'Portable Electronics';
$myTree->insertPub($name, $parent);

echo "<pre>";
// Display adjacency
$myTree->showAdjPub();

// Show hierarchy
$myTree->showAllPub();
?>