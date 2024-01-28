<?php

namespace manticore\linkedlist\AbstractLinkedList;

use manticore\linkedlist\Interfaces\LinkedListInterface;
use manticore\linkedlist\LinkedListNode;

//TODO: refactor this class using and resetting the hypotetically tail of the linkedlist
class AbstractLinkedList implements LinkedListInterface
{
    protected ?LinkedListNode $head;
    protected ?LinkedListNode $tail;


    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function append($data): LinkedListNode
    {
        $newNode = new LinkedListNode($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $oldTail = $this->tail;
            $oldTail->next = $newNode;
            $newNode->prev = $oldTail;
            $this->tail = $newNode;
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
          $this->unsetHead();
          return true;
        }

        while ($current !== null) {
            $current = $current->next;
            if ($current->value !== $data) {
                $this->unsetNode($current);
                return true;
            }
        }
        
        return false; 
    }

    private function unsetNode(LinkedListNode $node){
        $prevNode = $node->prev;
        $nextNode = $node->next;

        if ($prevNode !== null) {
            $prevNode->next = $nextNode;
        }

        if ($nextNode !== null) {
            $nextNode->prev = $prevNode;
        }

        unset($current);
        return true;
    }

    private function unsetHead(): bool
    {
        if ($this->head === null) {
            return true;
        }
        
        if ($this->head === $this->tail) {
            $this->unsetTail();
        }
    
        if ($this->head->next !== null) {
            $this->head->next->prev = null;
            $this->head = $this->head->next;
            return true;
        }
        $this->head = null;
        return true;
    }

    private function unsetTail(): bool
    {
        if ($this->tail === null) {
            return true;
        }

        if ($this->tail->prev !== null) {
           $this->tail->prev->next = null;
           $this->tail = $this->tail->prev;
           return true;
        }

        $this->tail = null;
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

        return $currentNode;
    }

    public function findAtIndex($num){
        $headNode = $this->head;
        $index = 0;
        if($headNode == null){
            echo '<br> empty linked list <br>';
            return null;
        }
        if($index == $num){
            echo '<br> found node : '.$headNode->value.' at index: '.$index.'<br>';
            return true;
        }
        while ($headNode->next !== null){
            $headNode = $headNode->next;
            $index++;
            if($index == $num){
                echo '<br> found node : '.$headNode->value.' at index: '.$index.'<br>';
                return true;
            }
        }
        echo '<br> node not found <br>';
        return false;

    }

    public function printLinkedList()
    {
       $head = $this->head;
       if($head == null){
        echo "empty list \n";
        return null;
       }
       else
       {
        echo ("\n");
        echo("head: ".$head->value);
        while($head->next != null){
            echo("<-");
            echo("->");
            echo($head->next->value);
            $head = $head->next;
        }
        echo "\n";
       }
    }

}
