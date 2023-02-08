<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <?php include './includes/navbar.php'?>

        <div class="container">
            <div class="row">
                <h3 class="black-text" style=" text-align:center;">DADOS DO CLIENTE</h3>
                <table class="centered black-text bordered highlight">
                    <thead>
                        <tr style="background-color:black;color:#FFF;">
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EDITAR</th>
                            <th>DELETAR</th>
                        </tr>
                    </thead>  
                    <?php
                        include "conexao.php";
                        $consultar = "SELECT * FROM cliente ";
                        $con = $mysqli ->query($consultar) or die($mysqli -> erro);
                        while($dados = $con -> fetch_array()){ 
                    ?>
                    <tbody>
                        <tr  class="#ffab40 orange accent-4" style="text-aling:center;">
                            <td><?php echo $dados['id']; ?> </td>
                            <td><?php echo $dados['nome']; ?> </td>
                            <td>
                                <a href="recebe_editar.php?id=<?php echo $dados['id']; ?>">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                            <td>
                                <a href="recebe_deletar.php?id=<?php echo $dados['id']; ?>">
                                    <i class="material-icons">delete</i>
                                </a>
                                  </td>
                    <?php } ?>
                </table>
            </div>
        </div>
  




      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </body>
  </html>