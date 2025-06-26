<?php
require_once "ConexaoBD.php";
class CursoDAO{
    static function buscarCursos(){
        $conexao = ConexaoBD::conectar();
        $sql = "select * from curso";    
        $resultado = $conexao->query($sql);
        return $resultado->fetchALL(PDO::FETCH_ASSOC);
    }

}