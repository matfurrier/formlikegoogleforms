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
                var novoItem = $("#itemPergunta").clone().removeAttr('id'); // para não ter id duplicado
                novoItem.children('input').val(''); //limpa o campo 
            $("#criarFormulario").append(novoItem);
            });

            $("#novoCheckBox").click(function() {
                var novoItem = $("#itemChekbox").clone().removeAttr('id'); // para não ter id duplicado
                novoItem.children('input').val(''); //limpa o campo 
            $("#criarFormulario").append(novoItem);
            });

            $("#novoRadio").click(function() {
                var novoItem = $("#itemRadio").clone().removeAttr('id'); // para não ter id duplicado
                novoItem.children('input').val(''); //limpa o campo 
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

                <div class="dropdown">
                    
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Escolher Ação
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <input type="button" id="novaPergunta" class="dropdown-item" value="Input" />
                        <input type="button" id="novoCheckBox" class="dropdown-item" value="CheckBox" />
                        <input type="button" id="novoRadio" class="dropdown-item" value="CheckRadio" />
                        <input type="button" id="novoTextArea" class="dropdown-item" value="TextArea" />
                        <input type="button" id="novoSelect" class="dropdown-item" value="Select" />
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
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
            <div class="form-group" id="itemPergunta">
                <label for="tituloPergunta">Titulo da Pergunta</label>
                <input type="text" class="form-control"  name="tituloPergunta[]" placeholder="Inserir o titulo para sua pergunta">
            </div>

            <!-- criar campo checkbox-->
            <div class="form-group" id="itemChekbox">
                <label for="tituloPergunta">Titulo do checkbox</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="checkbox" aria-label="Chebox para permitir input text">
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Inserir o titulo para sua pergunta">
                </div>
            </div>

              <!-- criar o campo Radio -->
            <div class="form-group" id="itemRadio">
                <label for="tituloPergunta">Titulo do Radio</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Botão radio para acompanhar input text">
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Inserir o titulo para pergunta">
                </div>
            </div>
           
        </form>
    </div>
</div>

</body>

</html>
