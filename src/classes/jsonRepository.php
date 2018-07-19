<?php

class jsonRepository implements RepositoryInterface
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function all($entity)
    {
        $data = json_decode(file_get_contents($this->file));
        $items = [];

        foreach ($data as $key => $val) {
            $array = $data[$key]->$entity;
            array_push($items, $array);
        }

        return $items;
    }

    public function find($entity, $value, $field = 'id')
    {
        $find = $this->all($entity);
        foreach($find as $key => $data) {
            if($key == $value) {
                return $find[$key];
            }       
        }   
    }
}