<?php

class SerializedArray implements Index
{
    public $data = [
        'name' => 'Venca',
        'age' => '17',
    ];

    public function index()
    {
        return serialize($this->data);
    }
}
