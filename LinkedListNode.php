<?php

namespace LinkedListCustom;

class LinkedListNode
{
    public ?LinkedListNode $next = null;
    public ?LinkedListNode $prev = null;
    public mixed $value = null;

    public function __construct(mixed $value = null)
    {
        $this->value = $value;
    }
}
