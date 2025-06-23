<?php
require_once "cursoBD.php";
class CursoDAO{
    static function buscarCursos(){
        $conexao = ConexaoBD::conectar();
        $sql = "select * from curso";    
        $resultado = $conexao->query($sql);
        return $resultado->fetchALL(PDO::FETCH_ASSOC);
    }

}