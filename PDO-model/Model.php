<?php

abstract class Model
{

    protected $data;
    protected $fail;
    protected $message;

    public function __set($name, $value){
        if(empty($this->data)){
            $this->data = new \stdClass();
        }

        $this->data->$name = $value;
    }

    public function __isset($name)
    {
        return isset($this->data->$name);
    }

    public function __get($name){
        return ($this->data->$name ?? null);
    }

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

    protected function create(string $entity, array $data)
    {

    }

    protected function read(string $select, string $params = null): ?\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($select);

            if ($params) {
                parse_str($params, $params);
                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
            }

            $stmt->execute();
            return $stmt;
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }
    }

    protected function update()
    {
    }

    protected function delete()
    {
    }

    protected function safe(): ?array
    {
       $safe = (array)$this->data;
       foreach (static::$safe as $unset){
           var_dump($unset);
           unset($safe[$unset]);
       }
       return $safe;
    }

    protected function filter(array $data): ?array
    {
        $filter = [];
        foreach ($data as $key => $value){
            $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
        }
        return $filter;
    }
}
