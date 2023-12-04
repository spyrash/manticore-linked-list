<?php

namespace ManticoreLinkedList\src;

use ManticoreLinkedList\src\LinkedListNode;
use ManticoreLinkedList\src\AbstractLinkedList\AbstractLinkedList;

class LinkedList extends AbstractLinkedList
 {
   
   public function __construct(LinkedListNode $node)
   {
       $this->head = $node;
       $this->tail = $node;
   }

    public function printLinkedList()
    {
       $head = $this->head;
       if($head == null){
        echo'empty list <br>';
        return null;
       }
       else
       echo '<br>'.$head->value;
       {
        while($head->next != null){
            $head = $head->next;
            echo '->'.$head->next;
        }
        echo '<br>';
       }
    }

    public function pushNode(LinkedListNode $node){
        $headNode = $this->head;
        if ($headNode == null){
           $this->__construct($node);
            return null;
        }
        else if ($headNode->next === null){ 
            $headNode->next = $node;
            $node->prev = $headNode;
            $this->tail = $node;
            return 1;
        }
        else{
            $tailNode = $this->tail;
            $tailNode->next = $node;
            $node->prev = $tailNode;
            $this->tail = $node;
        }
    }


    public function popNode(){
        $tailNode = $this->tail;
        $nodeTmp=$tailNode->prev;
        if ( $tailNode == null){
            return null;
        }
        else if($nodeTmp != null){
            $tailNode->prev = null;
            $nodeTmp->next = null;
            $this->tail = $nodeTmp;
            echo '<br>'.$tailNode->value.'<br>';
            return $tailNode;
        }
        else{
            $this->tail = null;    
        }
    }

    public function findNode(LinkedListNode $node){
        $headNode = $this->head;
        if($node->value == $headNode->value){
            echo '<br>'.$node->value.' found <br>';
            return true;
        }
        $tailNode = $this->tail;
        if($node->value == $tailNode->value){
            echo '<br>'.$node->value.' found <br>';
            return true;
        }
        while($headNode->next != null){
            $headNode = $headNode->next;
            if($node->value == $headNode->value){
                echo '<br>'.$node->value.' found <br>';
                return true;
            }
        }
        echo '<br>'.$node->value.' not found <br>';
        return false;
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

}
?>