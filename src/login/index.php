<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Metal Slug</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
</head>

<body class="login">

  <div class="container">
    <!-- o style height 100vh define uma altura para a tela, assim o align-items-center funciona e centraliza na vertical -->
    <div class="row justify-content-center align-items-center" style="height:100vh">
      <div class="col-xl-4 col-lg-6 col-md-8">
        <form action="" autocomplete="off">
          <h2 class="text-center">Login</h2>
          <div class="form-group pb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="email@email.com">
          </div>
          <div class="form-group pb-4">
            <label>Senha</label>
            <input type="password" class="form-control pass_style" placeholder="•••••••••">
          </div>
          <button type="button" id="sendlogin" class="btn btn-primary w-100">login</button>
          <p class="text-center pt-4">Não possui uma conta? <a href="#">Cadastre-se</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>