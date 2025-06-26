<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Festa Junina</title>
</head>

<body>

    <style>
        * {
            font-family: "Figtree", sans-serif;
        }
    </style>

    <?php
    require_once "CursoDAO.php";
    $cursos = CursoDAO::buscarCursos();
    ?>

    <div class="mt-5 container">
        <div class="row">
            <legend class="mt-3">Cadastro de Comidas</legend>

            <form action="cadastro.php" method="POST">
                <div class="row mb-3">

                    <div class="col-6">
                        <label for="nome" class="form-label">Nome da Comida</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>

                        <select class="form-select mt-3 mb-3" aria-label="Selecione a turma" name="turma" required>
                            <option selected>Selecione a turma</option>
                            <?php
                            for ($i = 0; $i < count($cursos); $i++) {
                                $curso = $cursos[$i];
                                //echo "<option value='" . $curso['nome'] . '">" . $curso['nome'] . "</option>";
                                ?>
                                <option value='<?=$curso['idcurso']?>'><?=$curso['nome']?></option>
                            <?php    
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-6">
                        <label for="valor" class="form-label">Preço da Comida</label>
                        <input type="number" class="form-control" name="valor" id="valor" required>

                        <label for="quantidade" class="form-label">Quantidade Vendida</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-danger w-100 fw-bold">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>