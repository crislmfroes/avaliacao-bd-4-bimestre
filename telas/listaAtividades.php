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
    <title>Lista de Atividades</title>
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
                      <a class="nav-link" href="listaAtividades.html">Lista de Atividades</a>
                    </li>
                </ul>
        </nav>


    <br>
    <br>
    <h1 class="centro">Lista de Atividades</h1>
    <br>
    <br>
    <br>




    <div class="container">

       <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Data Entrega</th>
                    <th scope="col"> </th>
                    
                </tr>
            </thead>
            <tbody>
			<?php
			include_once('atividadeDao.php');
			include_once('atividade.php');
			$atdao=new atividadeDao();
			$atividade=$atdao->list(1000,0);
			//var_dump($atividade);
			foreach($atividade as $a){ ?>
			
                <tr>
                    <th scope="row"><?php echo $a->getNome();?></th>
                    <td><?php echo $a->getDescricao();?> </td>
                    <td> <?php echo $a->getPeso();?></td>
                    <td> <?php echo $a->getDataEntrega()->format('Y/m/d');?></td>
                    <td><a href="alteraAtividade.html" class="btn btn-light">Editar</a>
                        <button type="button" class="btn btn-light">Exclui</button> 
                        <a href="inserirNota.html" class="btn btn-light">Inserir Nota dos ALunos</a>
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