<?php
require_once "ComidaDAO.php";
ComidaDAO::cadastrar($_GET);

echo "<h1>Deu muito boa</h1>";