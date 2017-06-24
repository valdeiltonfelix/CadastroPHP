<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        
         <title>Estudo de dados em PHP</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <script src="js/jquery-3.1.1.js"></script>
         <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
  <div class="container">
  <h2>Cadastro de Pessoa</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Abrir cadastro</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro</h4>
        </div>
        <div class="modal-body">
             <div> <label>Nome:</label> <input id="nome" type="text"></div>
             <div> <label>Cpf:</label> <input id="cpf" type="text"> </div>
             <div> <label>Idade:</label> <input id="idade" type="text"> </div>
             <div> <label>Nome da mae:</label> <input id="mae" type="text"> </div>
             <div> <label>Nome do pai:</label><input id="pai" type="text"> </div>                   
        </div>
          
          
        <div class="modal-footer">
            <button type="submit" class="btn btn-default" id="salvar"  >Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>   
       </div>
         </div> 
        </div> 
        <script src="js/dados.js"></script>

    </body>
</html>
