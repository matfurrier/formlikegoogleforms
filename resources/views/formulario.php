<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teste UNO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#novaPergunta").click(function() {
                var novoItem = $("#item").clone().removeAttr('id'); // para não ter id duplicado
                novoItem.children('input').val(''); //limpa o campo quantidade
            $("#criarFormulario").append(novoItem);
        });
  });
    
    </script>


</head>
<body>


<div class="container">

    <div class="classHead"> 

         Gerar Formulario

    </div> 
    
    <div class="classBody">
    
        <form action="formulario.php" method="POST" name="criarFormulario" id="criarFormulario">
                     
            <div class="classbotoes">
                <input type="button" id="novaPergunta" class="btn btn-warning" value="Nova Pergunta" />
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            <div class="classBordas">
                <div class="form-group">
                    <label for="tituloFormulario">Titulo Formulario</label>
                    <input type="text" class="form-control" id="tituloFormulario" name="tituloFormulario" placeholder="Inserir o titulo do formulario">
                    <small id="emailHelp" class="form-text text-muted">Todo formulario tem um titulo</small>
                </div>
                
                <div class="form-group">
                    <label for="descricaoFormulario">Descricao do Formulario</label>
                    <input type="text" class="form-control" id="descricaoFormulario"  name="descricaoFormulario" placeholder="Inserir uma descricao no formulario">
                </div>

            </div>
            
            
            <!-- criar as perguntas -->
            <div class="form-group" id="item">
                <label for="tituloPergunta">Titulo da Pergunta</label>
                <input type="text" class="form-control"  name="tituloPergunta[]" placeholder="Inserir sua pergunta">
            </div>
           
        </form>
    </div>
</div>

</body>

</html>
