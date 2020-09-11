<?php

abstract class Model
{

    protected $data;
    protected $fail;
    protected $message;

    public function data(): ?object
    {
        return $this->data;
    }

    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    protected function create(){

    }

    protected function read(){

    }

    protected function update(){

    }

    protected function delete(){

    }

    protected function safe(): ?array{
        return $this->safe;
    }

    private function filter(){
        
    }

}
