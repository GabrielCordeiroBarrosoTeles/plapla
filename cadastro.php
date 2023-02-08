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



        <section class="container">
            <h1 style="text-align: center;" id="eventos">Cadastro Cliente</h1><br>
            <div class="row row-cols-1 row-cols-md-12 g-4">
                <div class="col">
                    <div class="card" id="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col s12">
                                    <form action="cadastro.php" method="post" style="text-align:center;">
                                        <label>Nome do Cliente</label>
                                        <input class="black-text"  type="text" name="nome">
                                        <button  class="btn btn-primary" type="submit" name="action" style="margin: 10px;"> Enviar </button>
                                    </form>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <?php
                include "conexao.php";
                 $nome = $_POST['nome'];
                 $inserir = $mysqli ->query("INSERT INTO cliente VALUES('0','$nome')");
                 if($inserir){
                     echo "Cadastro realizado";
                 }else{
                     echo "Não cadastrado";
                 }
          ?>






      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>