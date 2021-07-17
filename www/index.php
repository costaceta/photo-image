<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Photo editor</h1>

  <form action="/processa.php" enctype="multipart/form-data">
    <p>
      <label>Título</label>
      <input type="text" name="titulo_artigo">
    </p>
    <p>
      <label>Faça o upload da imagem</label>
      <input type="file" name="imagem">
    </p>
    <p>
      <input type="submit" value="Gerar">
    </p>
  </form>
</body>
</html>
