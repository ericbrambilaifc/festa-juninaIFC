<?php
require_once "ComidaDAO.php";
ComidaDAO::cadastrar($_POST);

echo "<h1>Deu muito boa</h1>";