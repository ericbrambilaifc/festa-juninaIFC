<?php

    class ConexaoBD{   
        public static function conectar():PDO{$conexao = new PDO("pgsql:host=localhost; dbname=terceiro_a","postgres","postgres"); return $conexao;}
    }