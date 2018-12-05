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
                    <th scope="col">Disciplina</th>
                    <th scope="col">Data Entrega</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                    
                </tr>
            </thead>
            <tbody>
			<?php
			include_once('../model/atividadeDao.php');
            include_once('../model/atividade.php');
			$atdao=new atividadeDao();
			$atividade=$atdao->list(1000,0);
			//var_dump($atividade);
			foreach($atividade as $a){ ?>
			
                <tr>
                    <th scope="row"><?php echo $a->getNome();?></th>
                    <td><?php echo $a->getDescricao();?> </td>
                    <td> <?php echo $a->getPeso();?></td>
                    <td> <?php echo $a->getDisciplina();?></td>
                    <td> <?php echo $a->getDataEntrega()->format('Y/m/d');?></td>
                    <td>
                    
                    <form method="get" action="../views/alteraAtividade.php">
                            <input type="number" name="codigoAtividade" value=<?php echo $a->getId();?> >
                            <input type="text" name="nomeAtividade" value="<?php echo $a->getNome();?>" style="display: none;">
                            <input type="text" name="descricao" value="<?php echo $a->getDescricao();?>" style="display: none;">	
                            <input type="text" name="peso" value="<?php echo $a->getPeso();?>" style="display: none;">
                            <input type="text" name="disciplina" value="<?php echo $a->getDisciplina();?>" style="display: none;">
                            <input type="text" name="dataEntrega" value="<?php echo $a->getDataEntrega()->format('Y/m/d');?>" style="display: none;">
                            <button type="submit" class="btn btn-light">Editar Atividade</button>
                    </form>
                    </td>
                     <td>   			
                    <form method="POST" action="../controllers/excluirAtividade.php">
                         <input type="hidden" name="codAtividade" value="<?php echo $a->getId()?>">
                         <button type="submit" class="btn btn-light">Excluir</button>
                    </form>
                    </td>
                    <td>
                        <form method="POST" action="../views/inserirNota.php">
                            <input type="hidden" name="codigoAtividade" value="<?php echo $a->getId()?>">
                            <button type="submit" class="btn btn-light">Inserir notas de alunos</button>
                            <input type="text" name="nomeAtividade" value="<?php echo $a->getNome();?>" style="display: none;">
                            <input type="text" name="descricao" value="<?php echo $a->getDescricao();?>" style="display: none;">	
                            <input type="text" name="peso" value="<?php echo $a->getPeso();?>" style="display: none;">
                            <input type="text" name="disciplina" value="<?php echo $a->getDisciplina();?>" style="display: none;">
                            <input type="text" name="dataEntrega" value="<?php echo $a->getDataEntrega()->format('Y/m/d');?>" style="display: none;">
                        </form>
                        <!--<form action="../controllers/excluirAtividade.php" method="POST">
  						    <input type="text" name="excluirAtividade" value="<?php //echo $a->getId()?>" style="display: none;">
  							<button type="submit" class="btn btn-light">Excluir</button>
                        
                          </form>-->
                     
                        <!-- <a href="inserirNota.html" class="btn btn-light btn-inserir-atividade">Inserir Nota dos ALunos</a>-->
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