<?php 
require_once "../../valida_acesso.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <h2>Cadastrar Aluno</h2>
                </div>
                <form action="cadastro.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso:</label>
                        <input type="text" class="form-control" id="curso" name="curso" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                         <a href="../../index.php" class="btn btn-danger">Sair</a> 
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
