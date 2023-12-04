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

}
?>