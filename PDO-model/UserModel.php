<?php

class UserModel extends Model
{

    protected static $safe = ["created_at", "updated_at"];
    protected static $entity = "usuario";

    public function bootstrap()
    {
    }

    public function load(int $id, string $columns = "*"): ?UserModel
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE matricula = :id", "id={$id}");
        // var_dump($load->fetch());
        if ($this->fail || !$load->rowCount()) {
            $this->message = "Usuário não encontrado, para esta matricula";
            return null;
        }

        return $load->fetchObject(__CLASS__);
    }

    public function find($email, string $columns = "*"): ?UserModel
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE email = :email", "email={$email}");
        // var_dump($load->fetch());
        if ($this->fail || !$find->rowCount()) {
            $this->message = "Usuário não encontrado, para o email";
            return null;
        }

        return $find->fetchObject(__CLASS__);
    }

    public function all(int $limit = 30, int $offset = 0, string $columns = "*"): ?array
    {
        var_dump($limit, $offset, "oi1");
        $all = $this->read("SELECT {$columns} FROM " . self::$entity . " LIMIT :l OFFSET :o", "l={$limit}&o={$offset}");
        // var_dump($all->fetch());
        var_dump($all, $limit, $offset, "oi");
        if ($this->fail() || !$all->rowCount()) {
            $this->message = "Sua consulta não retornou usuários";
            return null;
        }

        return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
    }

    public function save()
    {
    }

    public function destroy()
    {
    }

    private function required()
    {
    }
}
