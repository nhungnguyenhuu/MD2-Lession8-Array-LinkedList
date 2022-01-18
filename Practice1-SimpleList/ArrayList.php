<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = '')
    {
        if(is_array($arr)){
            $this->arrayList = $arr;
        }else{
            $this->arrayList = [];
        }

    }

    public function add($obj)
    {
        $this->arrayList[] = $obj;

    }

    public function get($index)
    {
        if($this->isInteger($index) && $index< $this->size()){
            return $this->arrayList[$index];
        } else {
            die("Error in ArrayList.get");
        }

    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);

    }
    public function size()
    {
        return count($this->arrayList);
    }
}