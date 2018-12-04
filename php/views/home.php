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
    <title>Inicio</title>
</head>

<body>


        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="navbar-brand" href="home.html">Inicio</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="criarTurma.html">Criar Turma</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="criarAtividade.html">Criar Atividade</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="listaAtividades.php">Lista de Atividades</a>
                    </li>
                </ul>
        </nav>

    <br>
    <br>
    <br>
    <br>
              

    <div class="centro">
        
        <div class="">
          <h1 class="card-title">Bem Vindo!</h1>
          <br>
          <h5 class="card-text">Explore o sistema, crie turmas, atividades e gerencie notas.</h5>
          <br>
          <br>
          <a href="criarTurma.html" class="btn btn-primary">Criar Turma +</a>
          <a href="criarAtividade.html" class="btn btn-primary">Criar Atividade +</a>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="container">
        <h5>Suas Turmas</h5>
          <table class="table">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Ano</th>
                      <th scope="col"> </th>
                      
                  </tr>
              </thead>
              <tbody>
             <?php
			include_once('../model/turmaDao.php');
            include_once('../model/turma.php');
			$turdao=new turmaDao();
			$turma=$turdao->list(1000,0);
			//var_dump($turma);
            foreach($turma as $t){ ?>
                
                  <tr>
                      <th scope="row"><?php echo $t->getNome();?></th>
                      <td><?php echo $t->getAno();?></td>
                      <td><a href="alteraTurma.html" class="btn btn-light">Altera</a>
                          <a href="#" class="btn btn-light">Exclui</a>
                          <a href="listaAlunos.html" class="btn btn-light">Ver Lista de Alunos</a>
                         
                       </td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>

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