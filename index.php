<?php 
    include_once 'conexao.php'; //utiliza- se o include_once para que seja incluso o treco apenas uma vez 
?>

<!DOCTYPE html>
<html lang="pt-br">

    <!-- INICIO CABEÇALHO -->
       <?php include("cabecalho.php") ?>
    <!-- FIM CABEÇALHO -->


<body>       

    <div class="container-fluid conteudo">
        <!-- PRIMEIRA LINHA -->
            <?php include("topo.php") ?>
        <!-- /PRIMEIRA LINHA -->

    <!-- SEGUNDA LINHA -->
        <div class="row mb-3">

            <div class="col-sm-6 ">
                <h1 align="center">CADASTRO</h1>
                <h1>&nbsp;</h1>


        <?php 
            //Recebe os dados enviados do Formuario 
           //INPUT_POST escolha devido ao metodo de envio definido na criação do form
           //FILTER_DEFAULT recebe os valores de acordo com a definição no form
           //$dados -> var criada para receber os dados enviados
          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

             //Criação da Query (CONEXÃO) para inserir os dados na base
        $query_produto = "INSERT INTO produtos (produto, preco) VALUES (:produto, :preco)";

            //CRIAR VAR QUE RECEBE O VALOR INSERIDO NA BASE
        $cad_produto = $conn->prepare($query_produto);
        
        //Atribui os links da $query_produto a var $cad_produto
        $cad_produto->bindParam(':produto', $dados['produto'], PDO::PARAM_STR);
        $cad_produto->bindParam(':preco', $dados['preco'], PDO::PARAM_STR);
        
        $cad_produto->execute();

        if($cad_produto->rowCount()){
            echo "Produto cadastrado com sucesso";
        }

        ?>


        <!-- FORMULARIO -->
                <form action="" method="POST" name="CadProduto">
                    <div class="form-group">
                         <label for="produto">Produto</label>
                         <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto" required>
                    </div>

                    <div class="form-group">
                        <label for="preco">Preço</label>
                         <input type="text" name="preco" class="form-control"placeholder="Digite o preço do Produto" required>
                    </div>

                    <input type="button" class="btn btn-dark mt-2" value="enviar">
                    
                </form>
        <!-- /FORMULARIO -->
            </div>

            <div class="col-sm-6">
            <img src="img/boardpecas4.jpg.opdownload" alt="skate pecas tie dye" class="img-fluid angel"> 
        </div>
    </div>
 </div>
    <!-- FIM SEGUNDA LINHA -->

    <!-- RODAPE -->
    <?php include("rodape.php") ?>
    <!-- /RODAPE -->
    </body>
</html>
