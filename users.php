<?php
  $arquivousuarios='usuarios.json'; 
  if (count($_POST)) {
    $newUser = $_POST;
    $allUsers = [];
    if (file_exists($arquivousuarios)){
      $allUsers = json_decode(file_get_contents($arquivousuarios), true);
    }
    $allUsers[] = $newUser;
    file_put_contents($arquivousuarios, json_encode($allUsers));
  }
    $allUsers = [];
  if (file_exists($arquivousuarios)){
    $allUsers = json_decode(file_get_contents($arquivousuarios), true);
  }
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>
			
			<!-- Import css custom -->
			<link rel="stylesheet" type="text/css" href="style.css">
      
			<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
			<nav class="cyan">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo center">Projeto - Fotolog</a>
					<ul id="nav-mobile" class="left hide-on-med-and-down">
						<li><a href="post.php">Nova postagem</a></li>
						<li class="active"><a href="users.php">Usuários</a></li>
						<li><a href="fotolog.php">Fotos</a></li>
					</ul>
				</div>
			</nav>

      <main>
        <div class="container">
          <div class="row" style="margin-top:20px;">
            <div class="col s8 offset-s2">
              <div class="card grey lighten-5">
                <div class="card-content">
                  <span class="card-title">Cadastre um novo usuário</span>
                  <br>
<?php
  if (count($allUsers)) {
    echo '<ul class="collection">';
    foreach ($allUsers as $u) {
      echo '<li class="collection-item avatar">';
      echo '<i class="material-icons circle">account_circle</i>';
      echo '<span class="title">' . $u["nome"] . '</span>';
      echo '<p>' . $u["email"] . '<br></p>';
      echo '<a href="#" class="secondary-content"><i class="material-icons indigo-text text-accent-2">grade</i></a>';
      echo '</li>';
    }
    echo '</ul>';
  }
  else{
?> 

      <div class="row">
        <div class="col s10 offset-s1">
          <div class="card blue darken-2">
            <span class="white-text">
              <p>Você não possuí nenhum usuário cadastrado!</p>
              <p>Cadastre um usuário e comece a usar o Fotolog</p>
            </span>
          </div>
        </div>
      </div>

<?php
  }
?>
                </div>
                <div class="card-action">
                  <form method="POST" action="" class="container">
                    <div class="row">
                      <div class="input-field col s6">
                        <input type="text" placeholder="Nome ou Apelido" class="validate" name="nome" id="nome">
                        <label for="nome">Nome</label>
                      </div>
                      <div class="input-field col s6">
                        <input type="email" placeholder="email@dominio" class="validate" name="email" id="email">
                        <label for="email">E-mail</label>
                      </div>

                      <div class="col s12 right-align">
                        <button type="submit" class="btn waves-effect waves-light">
                          Cadastrar<i class="material-icons right"> send</i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

			<footer class="page-footer cyan gray-text darken-2-text">
				<div class="container"></div>
        <div class="footer-copyright">
          <div class="container">
          	© 2018 Copyright Fotolog - Developed by Eudálio Sousa
          	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="./node_modules/materialize-css/dist/js/materialize.min.js"></script>
    </body>
  </html>
        