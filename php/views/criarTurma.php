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
    <title>Criar Turma</title>
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
    <h1 class="centro">Criar Turma</h1>
    <br>
    <h3 class="centro">Crie turmas e exerça funções no Virtual Class</h3>
    <br>
    <br>

   
  


     <div class="container ">

            <form action="../controllers/inserirTurma.php" method="POST"> 
        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <label >Nome da Turma:</label>
                        <input type="text" name="nomeTurma" class="form-control " placeholder="Digite o nome da sua turma">    
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <label> Ano: </label>  
                        <input type="number" name="anoTurma" class="form-control" placeholder="ano">
                    </div>
                </div>  
                 

                <div class="form-group">
                        <div class="col-md-6 offset-md-3 aluno-form">
                            <label> Aluno: </label>
                            <input type="text" name="aluno[]" class="form-control" placeholder="aluno">
                            <input type="text" name="email[]" class="form-control" placeholder="email">
                            <input type="button" value="Adicionar Aluno" class="btn btn-outline-secondary" name="">
                        </div>
                </div>

 <!--               <div class="form-group">
                        <div class="col-md-6 offset-md-3 aluno-form">
                            <label> Aluno: </label>
                            <input type="text" name="aluno" class="form-control" placeholder="aluno">
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                </div>
-->        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <input type="submit" value="Criar Turma!" class="btn btn-primary" name="">
                </div>
                </div>
            </form> 
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/adicionarAluno.js"></script>
    
</body>

</html>