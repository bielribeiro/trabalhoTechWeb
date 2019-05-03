<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">

    <style>
        .letra {
            font-family: 'Bowlby One SC', cursive;
            font-size: 50px;
        }
    </style>

    <title>Atualizar Cadastro</title>
</head>

<body>

    <div class="container" style="background-color: #DCDCDC;">
        <br>
        <div class="btn-group" style="float: right;">

            <a href="perfil.html"><button type="button" class="btn btn-danger"><img src="http://www.absabastecimentos.com.br/wp-content/uploads/2017/05/manager-512.png" width="30px" height="30px">ADMIN</button></a>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item btn btn-danger" href="#">Configuração</a>
                <a class="dropdown-item btn btn-danger" href="suporte.html">Suporte</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item btn btn-danger" href="login.html">Sair</a>
            </div>
        </div>
        <br>
        <br>
        <div style="background-color: #B22222;">

            <center>
                <h1 class="letra">Atualização de cadastro</h1>
            </center>

        </div>

        <br>
        <?php
$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
$id = $_GET['id'];
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = "SELECT * FROM cadastro WHERE id='$id'";
foreach ($dbh->query($sql) as $row) {
   ?>
           <form method="GET" action="update.php">
           <input name="id" type="hidden" value="<?php echo $row['id']; ?>">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nome"><b>Nome</b></label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $row['nome']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="sobrenome"><b>SobreNome</b></label>
                  <input type="text" class="form-control" id="sobrenome" placeholder="SobreNome"  name="sobrenome" value="<?php echo $row['sobrenome']; ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="dnascimento"><b>Data de Nascimento</b></label>
                  <input type="text" class="form-control" id="dnascimento" placeholder="Data de Nascimento"  name="dnascimento" value="<?php echo $row['dnascimento']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" id="email" placeholder="Nome@exemplo.com" name="email" value="<?php echo $row['email']; ?>">
              </div>
              <div class="form-group">
                <label for="endereco"><b>Endereço</b></label>
                <input type="text" class="form-control" id="endereco" placeholder="Rua, Avenida e n°" name="endereco" value="<?php echo $row['endereco']; ?>">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="cidade"><b>Cidade</b></label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="estado"><b>Estado</b></label>
                  <select id="estado" class="form-control" name="estado" value="<?php echo $row['estado']; ?>">
                    <option selected>Selecione seu Estado...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="cep"><b>Cep</b></label>
                  <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $row['cep']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="sintomas"><b>Sintomas do Paciente</b></label>
                <textarea class="form-control" id="sintomas" rows="3" name="sintomas" value="<?php echo $row['sintomas']; ?>"></textarea>
              </div>
              <div class="form-group">
                <label><b>Gravidade dos Sintomas</b></label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="inlineRadio1" value="baixa" name="op">
                  <label class="form-check-label" for="inlineRadio1">Baixa Gravidade</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio"  id="inlineRadio2"  value="media"  name="op">
                  <label class="form-check-label" for="inlineRadio2">Média Gravidade</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio"  id="inlineRadio3"  value="alta"  name="op">
                  <label class="form-check-label" for="inlineRadio3">Alta Gravidade</label>
                </div>
              </div>
              <br>
              <center><button type="submit" class="btn btn-outline-danger btn-lg btn-block">Atualizar</button></center>
              <br>
              <hr>
                                        <center><p style="font-size:20px;">Deseja voltar ao Painel?  <a href="painel.html"><button type="button" class="btn btn-danger">Voltar</button></a></p></center>
              <br>
            </form>
            <?php
}
?>
      </div>
    
        

        

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>