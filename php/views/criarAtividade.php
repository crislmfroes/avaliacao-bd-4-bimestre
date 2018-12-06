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
    <title>Criar Atividade</title>
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
    <h1 class="centro">Criar uma Atividade</h1>
    <br>
    <h3 class="centro">Crie atividades para seus alunos</h3>
    <br>
    <br>

   
  


     <div class="container ">
	 
	 <?php
	 include_once('../model/atividadeDao.php');
include_once('../model/atividade.php');
		$cod = isset($_GET['cod']);

		if($cod){
		$cod = $_GET['cod'];
		$adao = new atividadeDao();
		$a = $adao->find(intval($cod));
}
	 
	 
	 
	 ?>

            <form  action="../controllers/inserirAtividade.php" method="POST"> 
        
                <div class="form-group">
                    <div class="   col-md-6 offset-md-3">
                        <label >Título:</label>
                        <input type="text" name="nomeAtividade" class="form-control " value="<?php if($cod) echo $a->getNome();?>" placeholder="Digite o título da sua atividade">    
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <label> Descrição: </label> 
                        <textarea class="form-control" value="<?php if($cod) echo $a->getDescricao();?>" name="descricaoAtividade" id="" cols="10" rows="5">
                         </textarea> 
                    </div>
                </div>  
        

                <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <label> Peso: </label>  
                            <input min="0" max="100" type="number" name="peso" class="form-control" value="<?php if($cod) echo $a->getPeso();?>" placeholder="peso">
                        </div>
                 </div>
		
		<div class="form-group">
                    <div class="   col-md-6 offset-md-3">
                        <label >Disciplina:</label>
                        <input type="text" name="disciplina" value="<?php if($cod) echo $a->getDisciplina();?>" class="form-control " placeholder="Digite a disciplina">    
                    </div>
                </div>

  

                 
                <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <label> Data de Entrega: </label>  
                            <input type="date" name="dataEntrega" value="<?php if($cod) echo $a->getDataEntrega()->format('Y/m/d');?>" class="form-control" placeholder="Data de Entrega">
                        </div>
                    </div> 
                 
                 <?php if($cod){ ?>
    <input type="hidden" name="cod" value="<?php echo $a->getId();?>">
    <?php } ?>
				 
        
                <div class="form-group">
                   <div class="col-md-6 offset-md-3">
                        <input type="submit" value="Criar Atividade!" class="btn btn-primary" name="">
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