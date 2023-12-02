<?php

namespace ManticoreLinkedList\src\Interfaces;

use ManticoreLinkedList\src\LinkedListNode;

interface LinkedListInterface {
    public function isEmpty(): bool;
    public function append($data): ?LinkedListNode;
    public function prepend($data): ?LinkedListNode;
    public function delete($data): bool;
    public function pop(): ?LinkedListNode;
}