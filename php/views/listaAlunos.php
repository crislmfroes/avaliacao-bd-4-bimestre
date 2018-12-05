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
    <h1 class="centro">Lista de Alunos</h1>
    <br>
    <br>
    <br>




    <div class="container">

       <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nota</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../model/alunoDao.php');
                $alunoDao = new AlunoDao();
                $alunos = $alunoDao->list(100, 0);
                foreach ($alunos as $aluno) {
                    if ($aluno->getTurma()->getId() == $_GET['codigo']) {?>
                    <tr>
                    <th scope="row"><?php echo $aluno->getId();?></th>
                    <td><?php echo $aluno->getNome();?></td>
                    <td><?php echo $aluno->getEmail();?></td>
                    <td><?php echo $aluno->getNota();?></td>
                    <td>
                        <form action="alteraAluno.php" method="get">
                            <input name="codigoAluno" type="hidden" value=<?php echo $aluno->getId();?> />
                            <button type="submit" class="btn btn-light">Alterar aluno</button>
                        </form>
                    </td>
                    <td>
                        <form action="../controllers/excluirAluno.php" method="get">
                            <input name="codigoAluno" type="hidden" value=<?php echo $aluno->getId();?> style="display: block;"/>
                            <button type="submit" class="btn btn-light">Excluir</button>
                        </form> 
                    </td>
                </tr>
    <?php       } } ?>
            <!--    <tr>
                    <th scope="row">1</th>
                    <td>Aluno 1</td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a href="alteraAluno.html" class="btn btn-light">Alterar aluno</a>
                        <a href="alteraNota.html" class="btn btn-light">Alterar nota</a>
                        <button type="button" class="btn btn-light">Exclui</button> </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Aluno 2</td>
                    <td> </td>
                    <td> </td>
                    <td><a href="alteraAluno.html" class="btn btn-light">Alterar aluno</a>
                        <a href="alteraNota.html" class="btn btn-light">Alterar nota</a>
                        <button type="button" class="btn btn-light">Exclui</button> </td>
                    </td>
                </tr> -->

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