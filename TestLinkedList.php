<?php
include('LinkedList.php');

function test(){
$nodo = new LinkedListNode(5);
$nodo2 = new LinkedListNode(7);
$nodo3 = new LinkedListNode(8);
$lista = new LinkedList($nodo);
$lista->findNode($nodo);
$lista->pushNode($nodo2);
$lista->printLinkedList();
$poppedNode = $lista->popNode();
$lista->findNode($nodo);
$lista->printLinkedList();
$lista->pushNode($poppedNode);
$lista->printLinkedList();
$lista->findAtIndex(1);
$lista->pushNode($nodo3);
$lista->printLinkedList();
}

test();




?>