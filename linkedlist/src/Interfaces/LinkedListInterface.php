<?php

namespace manticore\linkedlist\Interfaces;

use manticore\linkedlist\LinkedListNode;

interface LinkedListInterface {
    public function isEmpty(): bool;
    public function append($data): ?LinkedListNode;
    public function prepend($data): ?LinkedListNode;
    public function deleteFirstNodeByValue($dataValue): bool;
    public function pop(): ?LinkedListNode;
}