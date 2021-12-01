<?php

class DefaultArray implements Index
{
    public $data = [
        'name' => 'Venca',
        'age' => '17',
    ];

    public function index()
    {
        return $this->data;
    }
}
