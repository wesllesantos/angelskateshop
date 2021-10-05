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
                <h1 align="center">LISTA DE PRODUTOS</h1>


        <!-- TABELA DE PRODUTOS -->
        <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">PRODUTOS</th>
            <th scope="col">PREÇOS</th>
            <th scope="col">NACIONALIDADE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                    <td>Shapes</td>
                    <td>59,99 - 399,99</td>
                    <td>Nac/Importados</td>
            </tr>

            <tr>
                <th scope="row">2</th>
                    <td>Rodas</td>
                    <td>39,99 - 249,99</td>
                    <td>Nac/Importados</td>
            </tr>

            <tr>
                <th scope="row">3</th>
                    <td>Trucks</td>
                    <td>169,99 - 499,99</td>
                    <td>Nac/Importados</td>
            </tr>

            <tr>
                <th scope="row">4</th>
                    <td>Rolamentos</td>
                    <td>14,99 - 149,99</td>
                    <td>Nac/Importados</td>
            </tr>

            <tr>
                <th scope="row">5</th>
                    <td>Lixas</td>
                    <td>9,99 - 69,99</td>
                    <td>Nac/Importados</td>
            </tr>



        </tbody>
     </table>
        <!-- /TABELA DE PRODUTOS -->


    </div>

            <div class="col-sm-6">
            <img src="img/boardpecas2.jpg" alt="skate pecas santa cruz" class="img-fluid angel"> 
        </div>
    </div>
 </div>
    <!-- FIM SEGUNDA LINHA -->

    <!-- RODAPE -->
    <?php include("rodape.php") ?>
    <!-- /RODAPE -->

    </body>
</html>
