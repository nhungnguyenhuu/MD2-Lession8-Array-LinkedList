<?php

class Node
{
    public $data;
    private $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

}