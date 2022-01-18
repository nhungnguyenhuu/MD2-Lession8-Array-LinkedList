<?php

class MyList
{
    private $limit;
    public $elements;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->elements = [];
    }
    public function insert($index, $obj)
    {

    }
    public function add($obj)
    {
     if($this->isEmpty()){
         $this->elements[] = $obj;
     }else{
         echo "danh sach da day!";
     }
    }
    public function remove($index)
    {
        if(array_key_exists($index, $this->elements)){
            unset($this->elements[$index]);
        }

    }
    public function get($index)
    {
        if(array_key_exists($index, $this->elements)){
            return $this->elements[$index];
        }else{
            echo"Khong ton tai phan tu tai vi tri ".$index;
        }
    }
    public function clear()
    {
        $this->elements = [];
    }
    public function addAll($arr)
    {
        for($i = 0; $i<count($arr); $i++){
            $this->elements[] = $arr[$i];
        }
    }
    public function size()
    {
        return count($this->elements);
    }
    public function isEmpty()
    {
        return $this->limit > $this->size();
    }

}