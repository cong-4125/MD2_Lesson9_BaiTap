<?php


class Stack
{

    private $stack;
    private $newStack;

    public function __construct()
    {
        $this->stack = array();
        $this->newStack=array();
    }

    function push($value)
    {
        array_push($this->stack, $value);
    }

    function pop()
    {
        $result = array_pop($this->stack);

        array_push($this->newStack,$result);

    }

    function getNewStack(){
        return $this->newStack;

    }
    function getStack()
    {
        return $this->stack;
    }

}