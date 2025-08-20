<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
  
<form class="p-5 bg-white border rounded shadow" style="width: 400px;">
  <h3 class="text-center mb-4">Inscription</h3>
  <div class="mb-3">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput">
      <label for="floatinput">Noms</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput">
      <label for="floatinput">Prenoms</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Adresse Email</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Confirmez le mot de passe</label>
    </div>
  </div>
  <button type="submit" class="btn btn-danger w-100">Envoyer</button>
  <div class="text-center mt-3">
    <a href="/connexion" class="text-decoration-none">Vous avez deja un compte ?</a>
  </div>
</form>
  
</body>
</html>