<?php
require_once "ConexaoBD.php";
class ComidaDAO{
    static function cadastrar($dados){
        $conexao = ConexaoBD::conectar();
        $sql = "insert into comida (nome, valor, quantidade, idcurso) values (?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        
        $stmt->bindParam(1, $dados['nome']);
        $stmt->bindParam(2, $dados['valor']);
        $stmt->bindParam(3, $dados['quantidade']);
        $stmt->bindParam(4, $dados['idcurso']);

        $stmt->execute();
    }

    static function consultar(){
        $conexao = ConexaoBD::conectar();
        $sql = "select * from comida";    
        $resultado = $conexao->query($sql);
        return $resultado->fetchALL(PDO::FETCH_ASSOC);
    }

}