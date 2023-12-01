<?php

namespace LinkedListCustom\Tests;

use LinkedListCustom\LinkedListNode;
use LinkedListCustom\LinkedList;

//todo: total refactor.
function test(){
$node = new LinkedListNode(5);
$node2 = new LinkedListNode(7);
$node3 = new LinkedListNode(8);
$lista = new LinkedList($node);
$lista->findNode($node);
$lista->pushNode($node2);
$lista->printLinkedList();
$poppedNode = $lista->popNode();
$lista->findNode($node);
$lista->printLinkedList();
$lista->pushNode($poppedNode);
$lista->printLinkedList();
$lista->findAtIndex(1);
$lista->pushNode($node3);
$lista->printLinkedList();
}

test();




?>