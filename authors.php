<?php

class Author
{
    
    public $name;
    public $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type) : array
    {
        if ($type === 'ingfokan') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        } 
    }
}