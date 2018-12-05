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
    <title>Alterar Turma</title>
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
    <h1 class="centro">Alterar Turma</h1>
    <br>
    <h3 class="centro">Preenxa os campos para alterar</h3>
    <br>
    <br>

   
  


     <div class="container ">

            <form method="POST" action="../controllers/editaTurma.php"> 
        
                <input type="text" name="codigo" value="<?php echo $_POST['codigo'] ?>" style="display: none">
                <div class="form-group">
                    <div class="   col-md-6 offset-md-3">
                        <label >Novo nome da Turma:</label>
                        <input type="text" name="nomeTurma" class="form-control " value= "<?php echo $_POST['nomeTurma'] ?>">    
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <label> Ano: </label>  
                        <input type="number" name="anoTurma" class="form-control" value= "<?php echo $_POST['anoTurma'] ?>">
                    </div>
                </div>  
                  
        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <input type="submit" value="Salvar" class="btn btn-dark" name="">
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
</body>

</html>