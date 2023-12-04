<?php

namespace ManticoreLinkedList\src\AbstractLinkedList;

use ManticoreLinkedList\src\Interfaces\LinkedListInterface;
use ManticoreLinkedList\src\LinkedListNode;

//TODO: refactor this class using and resetting the hypotetically tail of the linkedlist
class AbstractLinkedList implements LinkedListInterface
{
    protected ?LinkedListNode $head;
    protected ?LinkedListNode $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function append($data): LinkedListNode
    {
        //TODO: upgrade using the tail
        $newNode = new LinkedListNode($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
            $newNode->prev = $current;
        }
        return $newNode;
    }

    public function prepend($data): LinkedListNode
    {
        $newNode = new LinkedListNode($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
        return $newNode;
    }

    public function delete($data): bool
    {
        if ($this->isEmpty()) {
            return false;
        }

        $current = $this->head;

        // Check if the node to delete is the head
        if ($current->value === $data) {
            $this->head = $current->next;
            if ($this->head !== null) {
                $this->head->prev = null;
            }
            unset($current);
            return true;
        }

        while ($current !== null && $current->value !== $data) {
            $current = $current->next;
        }

        if ($current === null) {
            return false; // Node not found
        }

        $prevNode = $current->prev;
        $nextNode = $current->next;

        if ($prevNode !== null) {
            $prevNode->next = $nextNode;
        }

        if ($nextNode !== null) {
            $nextNode->prev = $prevNode;
        }

        unset($current);
        return true;
    }

    public function pop(): ?LinkedListNode
    {
        if ($this->isEmpty()) {
            return null;
        }

        $currentNode = $this->head;
        $prevNode = null;

        while ($currentNode->next !== null) {
            $prevNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        if ($prevNode !== null) {
            $prevNode->next = null;
        } else {
            $this->head = null;
        }

        return $currentNode->value;
    }
}
