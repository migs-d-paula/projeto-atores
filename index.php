<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

    <title>:: PROJETO ATORES ::</title>
</head>
<body>
<form action="loading.php" method="post" enctype="multipart/form-data">
<form>
  <div class="mb-3">

  <label for="formFile" class="form-label">foto de perfil</label>
    <input name="campo-imagem" class="form-control" type="file" id="formFile" accept=".png, .jpg">
    <br>

    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input name="campo-nome" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
    <input name="campo-sobrenome" type="sobrenome" class="form-control" id="sobrenome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Profissão</label>
    <input name="campo-profissao" type="profissão" class="form-control" id="profissao-cadastro" aria-describedby="emailHelp">
    <br>

    <label for="disabledSelect" class="form-cadastrar">Gênero</label>
      <select name="campo-genero" id="genero-cadastro" class="form-select">
        <option>Masculino</option>
        <option>Feminino</option>
        <option>Outros</option>
    </select>

    <br><br>

    <label for="" id="titulo"> ULTIMOS TRÊS TRABALHOS</label>

    <br><br>

    <label for="exampleInputEmail1" class="form-label">Ano</label>
    <input name="campo-ano1" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Título</label>
    <input name="campo-titulo1" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Papel</label>
    <input name="campo-papel1" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Ano</label>
    <input name="campo-ano2" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Título</label>
    <input name="campo-titulo2" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Papel</label>
    <input name="campo-papel2" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Ano</label>
    <input name="campo-ano3" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Título</label>
    <input name="campo-titulo3" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <label for="exampleInputEmail1" class="form-label">Papel</label>
    <input name="campo-papel3" type="nome" class="form-control" id="nome-cadastro" aria-describedby="emailHelp">

    <br><br>


  </div>
  <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
</form>
</body>
</html>