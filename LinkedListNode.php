<?php
class LinkedListNode{
    private ?LinkedListNode $next = null;
    private ?LinkedListNode $prev = null;
    private mixed $value = null;
    public function __construct(mixed $value)
    {
        $this->value = $value;
    }
    public function getValue(){
        return $this->value;
    }
    public function setNext(LinkedListNode $node){
        $this->next = $node;
    }
    public function getNext(){
        return $this->next;
    }
    public function setPrev(LinkedListNode $node){
        $this->prev = $node;
    }
    public function getPrev(){
        return $this->prev;
    }
    public function resetPrev(){
        $this->prev = null;
    }
    public function resetNext(){
        $this->next = null;
    }
   }
?>