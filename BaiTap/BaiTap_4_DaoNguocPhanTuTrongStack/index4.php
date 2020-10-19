<?php
include_once 'Stack.php';

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
print_r($stack);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
print_r($stack);