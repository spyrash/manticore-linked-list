<?php

namespace LinkedListCustom\AbstractLinkedList;

use LinkedListCustom\Interfaces\LinkedListInterface;
use LinkedListCustom\LinkedListNode;

class AbstractLinkedList implements LinkedListInterface
{
    protected ?LinkedListNode $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function append($data): LinkedListNode
    {
        //TODO
        return new LinkedListNode();
    }

    public function prepend($data): LinkedListNode
    {
        //TODO
        return new LinkedListNode();
    }

    public function delete($data): bool
    {
        //TODO
        return true;
    }

    public function pop(): ?LinkedListNode
    {
        if ($this->isEmpty()) {
            return null;
        }
    
        $current = $this->head;
        $prev = null;
    
        while ($current->next !== null) {
            $prev = $current;
            $current = $current->next;
        }
    
        if ($prev !== null) {
            $prev->next = null;
        } else {
            $this->head = null;
        }
    
        return $current->value;
    }
}
