<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>provac</h1>
    <form action="cad.php" method="post">
  <div class="mb-3">
    <label for="nome" class="form-label">nome completo</label>
    <input type="text" class="form-control" name="nome" >
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">data</label>
    <input type="date" class="form-control" name="data">
  </div>
  <div class="mb-3 form-check">
  <label for="email" class="form-check-label" >email</label>
  <input type="email" class="form-check-input" name="email">
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">senha</label>
    <input type="password" class="form-control" name="senha" >
  </div>
  <button type="submit" class="btn btn-primary">enviar</button>
</form>
    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>