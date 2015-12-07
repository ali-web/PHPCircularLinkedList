<?php

class Node{
    public $data;
    public $link;

    function __construct($data, $next = NULL){
        $this->data = $data;
        $this->link = $next;
    }    
}

class CircularLinkedList{
    private $first;
    private $current;
    private $last;
    private $count;

    function __construct(){
        $this->count = 0;
        $this->first = null;
        $this->current = null;
        $this->last = null;
    }

    function isEmpty(){
        return ($this->first == NULL);
    }

    function push($data){

       if($this->isEmpty()){
           $this->first   = new Node($data, $this->first);
           $this->current = $this->first;
           $this->last = $this->first;
       }
       else{
 
           $this->last->link = new Node($data, $this->first);
           $this->last = $this->last->link;
       }
      
       $this->count++;      
    }
    
    function push_array($arr){
        
        if (!is_array($arr))
            return false;
        foreach($arr as $value)
            $this->push($value);    
    }

    function find($value){
        $q = $this->first;
        for ($i=0; $i < $this->count; $i++){
            if($q->data == $value){
                $this->current = $q;
                return;
            }    
            $q = $q->link;    
        }   
    }

    function getNext(){
        $result = $this->current->data;
        $this->current = $this->current->link;
        return $result;        
    }
    
    function reset() {
        $this->current = $this->first;
    }
    
    function lenght(){
        return $this->count;
    }
    
    function printList($loops = 1){
        for ($i=0; $i < $loops * $this->lenght(); $i++)
            echo $this->getNext()."<br />";
    }    
}
