<?php

class Author{
    public $name;
    public $description;
    
    public function show($type): array {
        if ($type === 'full') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        } elseif ($type === 'name_only') {
            return [
                'name' => $this->name
            ];
        } else {
            return [];
        }
    }
}