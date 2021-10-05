<!-- CRIANDO A CONEXÃO COM A BASE DE DADOS  -->
<?php 
    $host = "127.0.0.1";                 //nome do servidor
    $user = "root";                     //nome do usuario 
    $pass = "";                        //senha do login
    $dbname = "angelskateshop";       //nome da base de dados
    $port = 3306;                    //porta de conexão com o banco de dados 

     $conn =  new PDO("mysql:host=$host; port=$port; dbname=" .$dbname, $user, $pass);

?>
