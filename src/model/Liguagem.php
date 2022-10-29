<?php

namespace Src\Model;

use Src\Conexao\CRUD;

class Liguagem extends CRUD
{
    // nome da tabela do banco
    private $table = 'tb_linguagem';

    public function Inserir($dados)
    {
        $result = $this->create($this->table, $dados);
        return $result;
    }
    public function Editar($dados, $where)
    {
        $result = $this->update($this->table, $dados, $where);
        return $result;
    }

    public function Deletar($where)
    {
        $result = $this->delete($this->table, $where);
        return $result;
    }


    public function BuscarTodos()
    {
        $result = $this->readAll($this->table);
        return $result;
    }
}
