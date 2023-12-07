<?php

namespace manticore\linkedlist;

use manticore\linkedlist\LinkedListNode;
use manticore\linkedlist\AbstractLinkedList\AbstractLinkedList;

class LinkedList extends AbstractLinkedList
 {
   
   public function __construct(?LinkedListNode $node = null)
   {
       $this->head = $node;
       $this->tail = $node;
   }

}
