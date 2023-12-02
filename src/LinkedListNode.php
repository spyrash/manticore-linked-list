<?php

namespace ManticoreLinkedList\src;

class LinkedListNode
{
    public ?LinkedListNode $next = null;
    public ?LinkedListNode $prev = null;
    public mixed $value = null;

    public ?int $numberOfRepetition = 0;

    public function __construct(mixed $value = null)
    {
        $this->value = $value;
    }
}
