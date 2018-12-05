<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Lista de Alunos</title>
</head>

<body>


        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="navbar-brand" href="home.php">Inicio</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="criarTurma.php">Criar Turma</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="criarAtividade.php">Criar Atividade</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="listaAtividades.php">Lista de Atividades</a>
                    </li>
                </ul>
        </nav>


    <br>
    <br>
    <h1 class="centro">Lista de Entregas</h1>
    <br>
    <br>
    <br>




    <div class="container">

        <form class="form-aluno" action="../controllers/inserirEntrega.php" method="get">
        <div class="form-group">
        <div class="col-md-6 offset-md-3">
            <input type="number" name="aluno" id="aluno-id" style="display: none;"/>
            <label>Pesquisar aluno</label>
            <input type="text" autocomplete="off" class="form-control" id="aluno-search-input"/>
            <ul class="list-group list-aluno-options" id="select-aluno">
            </ul>
        </div>

        </div>
        
<br>
<br>
<br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label>Inserir nota da atividade</label>
                <input type="number" name="nota" class="form-control " placeholder="Digite a nota">
        </div>
        <input style="display: none;" name="atividade" value=<?php echo $_POST['codigoAtividade'];?> />


    </div>

    <div class="form-group">
        <div class="col-md-6 offset-md-3">
            <input type="submit" value="Inserir nota" class="btn btn-danger submit-button" name="nota">
        </div>

    </form>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/searchAluno.js"></script>
</body>

</html>