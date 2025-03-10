<!DOCTYPE html>
<html lang="en">
<?php session_abort() ?>
<head>
<script type="text/javascript">
window.onload=function(){
	Objeto=document.getElementsByTagName("a");
	for(a=0;a<Objeto.length;a++){
		Objeto[a].onclick=function(){
			location.replace(this.href);
			return false;
		}
	}
}
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="Img/fraternidadmundial.ico" rel="icon">
  <title>FM - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  
                  <form class="user" method="post" action="loginp.php" id="loginform">
                    <div class="form-group">
                      <label for="username">Correo Electrónico</label>
                      <input  class="form-control" type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input class="form-control"  type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Iniciar sesión" class="submit">
                   </div>
                  
                </form>
                <input class="btn btn-primary btn-block" type="button" onclick="location.href='../index.php';" value="Ir a Portal" />
<!--                   <form class="user" method="post" action="login.php" id="loginform">
                    <div class="form-group">
                      <input type="email" class="form-control" id="username" name="username"  aria-describedby="emailHelp"
                        placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <a class="btn btn-primary btn-block" >Iniciar Sesión</a>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> 
                  </form> -->
                  <hr>
                  <!-- <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                  </div> -->
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>