<?php


class Queue
{
    private $front;
    private $back;

    public function __construct()
    {
        $this->back = NULL;
        $this->front = NULL;
    }

    function isEmpty()
    {
        if (!empty($this->front)) {
            return true;
        } else {
            return false;
        }
    }

    function enqueue($value)
    {
        $node = new Node($value);
        if ($this->front == NULL) {
            $node->next = $this->front;
            $this->front = $node;
            if ($this->back == NULL) {
                $this->back = $node;
            }
        } else {
            $this->back->next = $node;
            $node->next=NULL;
            $this->back=$node;
        }
    }

    function dequeue(){
        if ($this->front != NULL) {
            if ($this->front != NULL) {
                $this->front = $this->front->next;
            }
        } else {
            $this->front=NULL;
        }

    }

//    function getLinkedList()
//    {
//        $listData = array();
//        $current = $this->front;
//
//        while ($current != NULL) {
//            array_push($listData, $current->getValue());
//            $current = $current->next;
//        }
//        return $listData;
//    }
//




}