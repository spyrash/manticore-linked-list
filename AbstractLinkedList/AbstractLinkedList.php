<?php

namespace LinkedListCustom\AbstractLinkedList;
use LinkedListCustom\Interfaces\LinkedListInterface;
use LinkedListCustom\LinkedListNode;

class AbstractLinkedList implements LinkedListInterface {
    protected $head;

    public function __construct() {
        $this->head = null;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function append($data): LinkedListNode {
        return new LinkedListNode();
    }

    public function prepend($data): LinkedListNode 
    {
        return new LinkedListNode();
    }

    public function delete($data): bool {
       return true;
    }

    public function pop(): ?LinkedListNode {
        return new LinkedListNode();
    }


}