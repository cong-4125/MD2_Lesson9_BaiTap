<?php


class Stack
{
    private $stack;
    private $limit;

    /**
     * Stack constructor.
     * @param $stack
     * @param $limit
     */
    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count(($this->stack)) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo "stack is ful";
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Stack is empty!";
        } else {
            array_shift($this->stack);
        }

    }

    public function top() {
        return current($this->stack);
    }
}