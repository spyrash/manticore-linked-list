<?php

namespace ManticoreLinkedList\Tests;

use ManticoreLinkedList\src\LinkedListNode;
use ManticoreLinkedList\src\LinkedList;

class TestLinkedList {

    //TODO: generic test for the linked list, take time of execution and find methods to convert array or "collection" into linkedList
    public function genericTest():bool
    {
        $firstNode = new LinkedListNode();
        $manticore = new LinkedList($firstNode);
        $manticore->pop();
        return true;
    }
}




