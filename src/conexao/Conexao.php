<?php

namespace Src\Conexao;

class Conexao {

    public static $instance;

    //se for utilizar outro tipo de banco
    public $schema = '';
  
    public static function getConexao() {
    
        if (!isset(self::$instance)) {
            self::$instance = new \PDO("mysql:host=".DB['HOST'].";dbname=".DB['DBNAME'], DB['USER'], DB['PASS']);
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_EMPTY_STRING);
        
        }
        
        return self::$instance;
    }

    
}