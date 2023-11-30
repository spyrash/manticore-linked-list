<?php

namespace LinkedListCustom;

use LinkedListCustom\LinkedListNode;
use LinkedListCustom\AbstractLinkedList\AbstractLinkedList;

class LinkedList extends AbstractLinkedList
 {
   public ?LinkedListNode $tail; 
   public function __construct(LinkedListNode $node)
   {
       $this->head = $node;
       $this->tail = $node;
   }

    public function printLinkedList()
    {
       $head = $this->getHead();
       if($head == null){
        echo'empty list <br>';
        return null;
       }
       else
       echo '<br>'.$head->getValue();
       {
        while($head->getNext() != null){
            $head = $head->getNext();
            echo '->'.$head->getValue();
        }
        echo '<br>';
       }
    }

    public function pushNode(LinkedListNode $node){
        $headNode = $this->getHead();
        if ($headNode == null){
           $this->__construct($node);
            return null;
        }
        else if ($headNode->getNext() == null){ 
            $headNode->setNext($node);
            $node->setPrev($headNode);
            $this->setTail($node);
            return 1;
        }
        else{
            $tailNode = $this->getTail();
            $tailNode->setNext($node);
            $node->setPrev($tailNode);
            $this->setTail($node);
        }
    }

    private function setTail(LinkedListNode $node)
    {
       $this->tail = $node;
    }

    private function setHead(LinkedListNode $node)
    {
       $this->head = $node;
    }

    public function getHead(): ?LinkedListNode
    {
        if($this->head){
            return $this->head;
        }
        else return null;
    }

    public function getTail(){
        if($this->tail){
            return $this->tail;
        }
        else return null;
    }
    public function resetTail(){
         $this->tail = null;
    }
    public function resetHead(){
        $this->head = null;
    }

    public function popNode(){
        $tailNode = $this->getTail();
        $nodeTmp=$tailNode->getPrev();
        if ( $tailNode == null){
            return null;
        }
        else if($nodeTmp != null){
            $tailNode->resetPrev();
            $nodeTmp->resetNext();
            $this->setTail($nodeTmp);
            echo '<br>'.$tailNode->getValue().'<br>';
            return $tailNode;
        }
        else{
            $this->resetTail();    
        }
    }

    public function findNode(LinkedListNode $node){
        $headNode = $this->getHead();
        if($node->getValue() == $headNode->getValue()){
            echo '<br>'.$node->getValue().' found <br>';
            return true;
        }
        $tailNode = $this->getTail();
        if($node->getValue() == $tailNode->getValue()){
            echo '<br>'.$node->getValue().' found <br>';
            return true;
        }
        while($headNode->getNext() != null){
            $headNode = $headNode->getNext();
            if($node->getValue() == $headNode->getValue()){
                echo '<br>'.$node->getValue().' found <br>';
                return true;
            }
        }
        echo '<br>'.$node->getValue().' not found <br>';
        return false;
    }

    public function findAtIndex($num){
        $headNode = $this->getHead();
        $index = 0;
        if($headNode == null){
            echo '<br> empty linked list <br>';
            return null;
        }
        if($index == $num){
            echo '<br> found node : '.$headNode->getValue().' at index: '.$index.'<br>';
            return true;
        }
        while ($headNode->getNext() != null){
            $headNode = $headNode->getNext();
            $index++;
            if($index == $num){
                echo '<br> found node : '.$headNode->getValue().' at index: '.$index.'<br>';
                return true;
            }
        }
        echo '<br> node not found <br>';
        return false;

    }

}
?>